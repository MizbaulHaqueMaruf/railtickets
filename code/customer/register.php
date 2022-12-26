<?php
session_start();
require('connection.php');
$errors = array();
if(isset($_SESSION['name'])){}
else{
	header("location:home.php");		
}
$tbl_name="users"; 
mysqli_select_db($conn,"$db_name")or die("cannot select DB");
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$password=$_POST['password'];
$cpassword=$_POST['cpsd'];
$email=$conn->real_escape_string($_POST['eid']);
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$id=$_POST['Identification_no'];
if($password !== $cpassword){
	$errors['password'] = "Confirm password not matched!";
	header('location:signup.php?error=passworddontmatch');
}
$email_check = "SELECT * FROM users WHERE email = '$email'";
$res = mysqli_query($conn, $email_check);
if(mysqli_num_rows($res) > 0){
	$errors['email'] = "Email that you have entered is already exist!";
	header('location:signup.php?error=userexists');
}
if(count($errors) === 0){
	$encpass = password_hash($password, PASSWORD_DEFAULT);
	$code = rand(999999, 111111);
	$status ="notverified";
	$insert_data = "INSERT INTO users (f_name,l_name, email, password, code,gender,dob, mobile, Identification_no,status)
					values('$f_name','$l_name', '$email', '$encpass', '$code', '$gender','$dob','$mobile','$id','$status')";
	$data_check = mysqli_query($conn, $insert_data);
	if($data_check){
		$subject = "Email Verification Code";
		$message = "Your verification code is $code";
		if(mail($email, $subject, $message)){
			$info = "We've sent a verification code to your email - $email";
			$_SESSION['info'] = $info;
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			header('location: user-otp.php');
			exit();
		}else{
			$deleteuser="DELETE from users where status='notverified'";
			mysqli_query($conn, $deleteuser);
			$errors['otp-error'] = "Failed while sending code!";
			header("location:signup.php?error=error_in_email_verfication");
		}
	}else{
		$errors['db-error'] = "Failed while inserting data into database!";
		header("location:signup.php?error=error_in_database");
		exit();
	}
}
?>