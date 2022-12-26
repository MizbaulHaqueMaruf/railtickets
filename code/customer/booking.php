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
//$schedule_id=$_GET['schedule'];
$sql2="Select name from users where email=".$uname."";
//$result2=$conn->query($sql2);
//$row=mysqli_fetch_array($result);
//$sql1="SELECT ".$class." from schedule where train_id='".$num."";
//$result1=$conn->query($sql1);
//while($row1=mysqli_fetch_array($result1)){
		//$value=$row1["".$class];
//}
	//$sql="INSERT INTO $tbl_name(user_email,user_id,schedule_id,no,class,date,seat)
	//VALUES ('$uname','$row[0]','$schedule_id','$num','$class','$doj','$class'+'-A')";
	//$result=$conn->query($sql);
	//echo "$sql</br>";
	//if(!$result) die ($conn->error);
	$sql2="Select ".$class." from schedule where train_id=".$num."";
	$value=$conn->query($sql2);	
	$value=mysqli_fetch_array($value);
	$value[0]=$value[0]-1;
	$sql2="UPDATE schedule SET ".$class."=".$value[0]." and train_id=".$num."";
	$result2=$conn->query($sql2);
	echo "</br>".$sql2."</br>";
	if(!$result2) die ($conn->error);


	echo("file succesfully inserted");

header("location:display.php?tno='$num'&& doj='$doj'&& class='$class'");


?>