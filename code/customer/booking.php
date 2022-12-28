<?php


session_start();
require('connection.php');
if(isset($_SESSION['name'])){}
	else{
		header("location:customer-login.php");
		
	}
$tbl_name="booked";

mysqli_select_db($conn,"$db_name") or die("cannot select db");

$uname=$_SESSION['name'];
$num=$_GET['tno'];
$class= $_GET['selct'];
$name=$_GET['name1'];
$age=$_GET['age1'];
$sex=$_GET['sex1'];
$fromstn=$_GET[	'fromstn'];
$tostn=$_GET['tostn'];
$doj=$_GET['doj'];
$dob=$_GET['dob'];
$schedule_id=$_SESSION['schedule'];
$sql2="Select f_name,l_name from users where email='$uname'";
$result2=$conn->query($sql2);
$row=mysqli_fetch_array($result2);
$sql1="SELECT '$class' from schedule where train_id='$num'";
$result1=$conn->query($sql1);
while($row1=mysqli_fetch_array($result1)){
		$value=$row1["".$class];
}
$f_name=$row['f_name'];
$prefix = date('Y-m-d');
$pnr = $prefix . strtoupper(substr(uniqid(), 0, 6));
$_SESSION['pnr']=$pnr;
$sql="INSERT INTO $tbl_name(user_email,user_id,schedule_id,no,class,code,date,seat)
	  VALUES ('$uname','1','$schedule_id','1','$class','$pnr','$dob','$class')";
$result=$conn->query($sql);
	echo "$sql</br>";
	if(!$result) die ($conn->error);
	$sql2="Select $class from schedule where train_id='$num'";
	echo "</br>".$sql2."</br>";
	$value=$conn->query($sql2);	
	$set=mysqli_fetch_assoc($value);
	echo "<br>".$set[$class]."</br>";
	$set_seat=$set[$class]-$_SESSION['passenger_count'];
	echo "<br>".$set_seat."</br>";
	$sql2="UPDATE schedule SET $class=$set_seat where id='$schedule_id'";
	$result2=$conn->query($sql2);
	echo "</br>".$sql2."</br>";
	if(!$result2) die ($conn->error);


	echo("file succesfully inserted");

header("location:display.php?tno='$num'&& doj='$doj'&& class='$class'");


?>