<?php
ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);
ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
session_start();

$uname=$_POST['username'];
$pass=$_POST['password'];

require('connection.php');

$tbl_name="users"; // Table name

mysqli_select_db($conn,"$db_name")or die("cannot select DB");


$sql="SELECT * FROM $tbl_name WHERE email='$uname'";
echo "$sql";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) < 1)
{
	echo " .... LOGIN TRY  ....";
	$_SESSION['error'] = "1";
	header("location:customer-login.php?error=userdoesnotexist"); //
}
else
{
	$row = mysqli_fetch_assoc($result);
	if(password_verify($pass,$row['password'])){
		$_SESSION['name'] = $uname; // Make it so the username can be called by $_SESSION['name']    //
		echo " ....   LOGIN  ....";
		echo $_SESSION['name'];
		$sql2="Select * from users where email='$uname'";
		$user_info=mysqli_query($conn,$sql2);
		$user_info_output=mysqli_fetch_assoc($user_info);
		$firstname=$user_info_output['f_name'];
		$lastname=$user_info_output['l_name'];
		$_SESSION['f_name']=$firstname;
		$_SESSION['l_name']=$lastname;
		header("location:reservation.php");    //
	}
	else{
		header("location:customer-login.php?error=wrongpassword");
	}	
}
?>
