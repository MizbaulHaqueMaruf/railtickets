<?php 
session_start();
require "connection.php";
$errors = array();

// verification of user
if(isset($_POST['check'])){
        $otp_code;
        if($_POST['otp']){
            $otp_code =$_POST['otp'];
        }
        else{
            $otp_code=-1;
        }
        $check_code = "SELECT email,status,code FROM users WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE users SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($conn, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: home.php');
                exit();
            }else{
                $deleteuser="DELETE from users where status='notverified'";
			    mysqli_query($conn, $deleteuser);
                $errors['otp-error'] = "Failed while updating code!";
			    header("location:signup.php?error=error_in_update_database");
            }
        }else{
            $deleteuser="DELETE from users where status='notverified'";
            mysqli_query($conn, $deleteuser);
            $errors['otp-error'] = "You've entered incorrect code!";
            header("location:signup.php?error=error_in_otp_verfication");
        }
    }
    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $check_email = "SELECT * FROM users WHERE email='$email'";
        $run_sql = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE users SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($conn, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                if(mail($email, $subject, $message)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                    header('location:customer-login.php?error=emaildontexits_prefersignup');
                    exit();
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
                header('location:customer-login.php?error=emaildontexits_prefersignup');
                exit();
            }
        }else{
            $errors['email'] = "This email address does not exist!";
            header('location:customer-login.php?error=emaildontexits_prefersignup');
            exit();
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM users WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
            header('location:customer-login.php?error=emaildontexits_prefersignup');
            exit();
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_DEFAULT);
            $update_pass = "UPDATE users SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($conn, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
                header('Location:customer-login.php?error=somethingwentwrong');
                exit();
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: customer-login.php');
    }
    //resend otp clicked
    if(isset($_POST['Resend Otp'])){
            $code = rand(999999, 111111);
            $email=$_SESSION['email'];
            $sql="Update users set code=$code where email=$email";
            $data_check=mysqli_query($conn,$sql);
            if($data_check){
            $subject="Resend Otp";
            $message="Your verfication code is $code";
            $sql2="Select * from users where code=$code";
            $data_check2=mysqli_query($conn,$sql2);
            $data=mysqli_fetch_assoc($data_check2);
            $email=$data['email'];
            if(mail($email,$subject,$message)){

            }
            else{
                header("Location:user-otp.php?email_error");
            }
        }
    }
?>