<?php
	session_start();
	
require('connection.php');
if(isset($_SESSION['name'])){}
	else{
		header("location:customer-login.php");
		
	}
$tbl_name="booked";

mysqli_select_db($conn,"$db_name") or die("cannot select db");
	$name1=$_SESSION['name'];
	$sql="SELECT DISTINCT no,class,date FROM $tbl_name WHERE user_email='$name1' ORDER BY date ASC";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	$today=date("Y-m-d");
	if(mysqli_fetch_row($result)>0){
		$tnum=$row['no'];
		$result=mysqli_query($conn,"SELECT * FROM train WHERE Number='$tnum'");
		$row=mysqli_fetch_array($result);
		$tname=$row['name'];
	}
	$result=mysqli_query($conn,$sql);
	$sql="SELECT * from booked, route where booked.no=route.id";
	$result2=mysqli_query($conn,$sql);
	$row2=mysqli_fetch_array($result2);
			 if(!isset($_SESSION['name']))
			 {
				$_SESSION['error']=15;
				header("location:customer-login.php");
			 } 
?>
<!DOCTYPE html>
<html>
<head>
	<title> Reservation </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link href="css/Default.css" rel="stylesheet">
	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});

	</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	<!--bootstrap-css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	 <!--custom-css-->
	 <link rel="stylesheet" href="css/style.css">
	
</head>
<body>
	<div class="wrap">
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo.jpg"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:100px;">
			<?php
			 if(isset($_SESSION['name']))
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 ?>
			
			</div>
			<div id="heading">
				<a href="home.php">RailTickets.com</a>
			</div>
			</div>
			<nav class="navbar navbar-expand-lg bg-light shadow fixed-top">
            <div class="container">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="img/flogo.png" alt="" width="60" height="60" class="d-inline-block align-text-top">
                        </a>
						<a href="#" class="logo-text"><span> <div style="color:black">RailTickets.com</div> </span></a>
                    </div>
                </nav>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="reservation.php">Home</a>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
			
			<br>
			<div>
			
			</div>
			<div style="top: 120px" >
				<div style="margin-top: 120px; background: rgb(109,105,180);
background: linear-gradient(153deg, rgba(109,105,180,1) 0%, rgba(255,255,255,1) 18%, rgba(6,205,164,1) 100%, rgba(0,212,255,1) 100%);">
				<table  class="table">
				<col width="90">
					<col width="90">
				<col width="90">
				<col width="110">
				<col width="90">
				<col width="90">
				<col width="90">
				<col width="90">
				<tr>
					<th style="width:10px;border-top:0px;">SNo.</th>
					<th style="width:100px;border-top:0px;">Train Number</th>
					<th style="width:100px;border-top:0px;">Date Of Journey</th>
					<th style="width:60px;border-top:0px;">From</th>
					<th style="width:80px;border-top:0px;">To</th>
					<th style="width:100px;border-top:0px;">Date Of Booking</th>
				</tr>	
				<?php
				
				$n=1;
				while($row=mysqli_fetch_array($result)){
					if($n%2!=0)
					{
				?>
				<tr class="text-error">
					<th style="width:10px;"> <?php echo $n; ?> </th>
					<th style="width:100px;"> <?php echo $row2['id']; ?> </th>
					<th style="width:100px;"> <?php echo $row['date']; ?> </th>
					<th style="width:100px;"> <?php echo $row2['start']; ?> </th>
					<th style="width:100px;"> <?php echo $row2['stop']; ?> </th>
					<th style="width:100px;"> <?php echo $today; ?> </th>
				</tr>
				<?php 
					}
					else
					{
				?>
				<tr class="text-info">
					<td style="width:10px;"> <?php echo $n; ?> </td>
					<th style="width:100px;"> <?php echo $row2['id']; ?> </th>
					<th style="width:100px;"> <?php echo $row['date']; ?> </th>
					<th style="width:100px;"> <?php echo $row2['start']; ?> </th>
					<th style="width:100px;"> <?php echo $row2['stop']; ?> </th>
					<th style="width:100px;"> <?php echo $today; ?> </th>
					</tr>
				<?php
					}
					$n++;
				}
				?>
				
				
				</table>
				</div>

			</div>
		</div>
		
		
	</div>
</body>
</html>	












