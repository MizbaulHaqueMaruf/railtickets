<?php
session_start();

$uname=$_POST['username'];
$pass=$_POST['password'];

require('connection.php');

$tbl_name="users"; // Table name

mysqli_select_db($conn,"$db_name")or die("cannot select DB");


$sql="SELECT * FROM $tbl_name WHERE email='$uname'";
echo "$sql";

$result=mysqli_query($conn,$sql) or trigger_error(mysql_error.$sql);

if(mysqli_num_rows($result) < 1)
{
	echo " .... LOGIN TRY  ....";
	$_SESSION['error'] = "1";
	header("location:login.php?error=userdoesnotexist"); //
}
else
{
	$row = mysqli_fetch_assoc($result);
	if(password_verify($pass,$row['password'])){
		$_SESSION['name'] = $uname; // Make it so the username can be called by $_SESSION['name']    //
		echo " ....   LOGIN  ....";
		echo $_SESSION['name'];
		header("location:reservation.php");    //
	}
	else{
		header("location:customer-login.php?error=wrongpassword");
	}	
}
?>
