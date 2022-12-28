<?php
session_start();
require_once '../conn.php';
require_once '../constants.php';
$class = "reg";
?>
<?php
$cur_page = 'signup';
include 'includes/inc-header.php';
include 'includes/inc-nav.php';
if (isset($_POST['f_name'])) {
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $file = 'file';
    $cpassword = $_POST['cpassword'];
    $password = $_POST['password'];
    if (!isset($f_name, $l_name, $email, $password, $cpassword) || ($password != $cpassword)) { ?>
<script>
alert("Ensure you fill the form properly.");
</script>
<?php
    } else {
        //Check if email exists
        $check_email = $conn->prepare("SELECT * FROM admin WHERE email = ?");
        $check_email->bind_param("s", $email);
        $check_email->execute();
        $res = $check_email->store_result();
        $res = $check_email->num_rows();
        if ($res) {
        ?>
<script>
alert("Email already exists!");
</script>
<?php

        } elseif ($cpassword != $password) { ?>
<script>
alert("Password does not match.");
</script>
<?php
        } else {
            //Insert
            $password = md5($password);
            $can = 1;
            
            $stmt = $conn->prepare("INSERT INTO admin (f_name, l_name, email, password) VALUES (?,?,?,?)");
            $stmt->bind_param("ssss", $f_name, $l_name, $email, $password);
            if ($stmt->execute()) {
            ?>
<script>
alert("Congratulations.\nYou are now registered.");
window.location = 'adminsignin.php';
</script>
<?php
            } else {
            ?>
<script>
alert("We could not register you!.");
</script>
<?php
            }
        }
    }
}
?>
<div class="signup-page">
    <div class="form">
        <h2>Create Account </h2>
        <br>
        <!-- <p class="alert alert-info">
            <marquee behavior="" scrollamount="2" direction="">You need to create an account to book/view trains!
            </marquee>
        </p> -->
        <form class="login-form" method="post" role="form" enctype="multipart/form-data" id="signup-form"
            autocomplete="off">
            <!-- json response will be here -->
            <div id="errorDiv"></div>
            <!-- json response will be here -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" required minlength="3" name="f_name">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" required minlength="3" name="l_name">
                </div>
            </div>

            
            <div class="col-md-12">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" required name="email">
                </div>
            </div>

        
            <div class="col-md-6">
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password">
                    <span class="help-block" id="error"></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword">
                    <span class="help-block" id="error"></span>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" id="btn-signup">
                        CREATE ACCOUNT
                    </button>
                </div>
            </div>
            <p class="message">
                <a href="#">.</a><br>
            </p>
        </form>
    </div>
</div>
<!-- </div> -->
<script src="assets/js/jquery-1.12.4-jquery.min.js"></script>

</body>

</html>