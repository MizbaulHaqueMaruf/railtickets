<?php
	session_start();
///email $_SESSION['name']
//first name $_SESSION['f_name']
//last name $_SESSION['l_name']
//passenger number $_SESSION['passenger-count']
//schedule id $_SESSION['schedule']
//date of journey $_SESSION['date']
//pnr $_SESSION['pnr']
// class name $_SESSION['class']
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
	$schedule_id=$_SESSION['schedule'];
	$sql="SELECT * from route, schedule where schedule.id=$schedule_id And schedule.route_id=route.id";
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
			 echo "Welcome,".$_SESSION['f_name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
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
					<th style="width:10px;border-top:0px;">Train No.</th>
					<th style="width:50px;border-top:0px;">First Name</th>
					<th style="width:50px;border-top:0px;">Last Name</th>
					<th style="width:50px;border-top:0px;">PNR</th>
					<th style="width:40px;border-top:0px;">Number of Passengers</th>
					<th style="width:60px;border-top:0px;">Date Of Journey</th>
					<th style="width:80px;border-top:0px;">From</th>
					<th style="width:40px;border-top:0px;">To</th>
					<th style="width:50px;border-top:0px;">Date Of Booking</th>
					
				</tr>	
				<?php
				
				$n=1;
				$email_id=$_SESSION['name'];
			 	$pnr = $_SESSION['pnr'];
				$first_name=$_SESSION['f_name'];
				$last_name=$_SESSION['l_name'];
				?>
				<tr class="text-error">
					<th style="width:10px;"> <?php echo $row2['id'];?> </th>
					<th style="width:50px;"> <?php echo $first_name;?></th>
					<th style="width:100px;"> <?php echo $last_name;?></th>
					<th style="width:150px;"> <?php echo $pnr;?></th>
					<th style="width:10px;" > <?php echo $_SESSION['passenger_count'];?> </th>
					<th style="width:100px;"> <?php echo $row2['date']; ?> </th>
					<th style="width:100px;"> <?php echo $row2['start']; ?> </th>
					<th style="width:100px;"> <?php echo $row2['stop']; ?> </th>
					<th style="width:100px;"> <?php echo $today; ?> </th>
				</tr>
				<?php 
				?>
				</table>
    			<style>
    			table {
      			  border-collapse: collapse;
       			 width: 75%;
       			 margin: 0 auto;
    			}
				th, td {
       			 border: 1px solid black;
       			 padding: 10px;
        		 text-align: left;
    			}
			    th {
     		    background-color: lightblue;
        	    font-weight: bold;
			    }
				
               </style>
				<table>
   				 <tr>
      			  <th>Total Fare</th>
    			  </tr>
    			<tr>
        		<td>
				<?php
  					  // Output the content here
				  $schedule_id=$_SESSION['schedule'];
				  $class_name= $_SESSION['class'];
				  $sql="Select $class_name from schedule where id=$schedule_id";
				  $result=mysqli_query($conn, $sql);
				  $seat_fare=mysqli_fetch_assoc($result);
				  $number_of_passengers=$_SESSION['passenger_count'];
				  echo '<br>'."Total number of passengers :".' '.$number_of_passengers.'<br>';
				  echo '<br>'."Ticket fare (per person) :".' '.$seat_fare[$class_name].'<br>';
				  echo '<br>'."Total amount :".' '.' '.' '.$number_of_passengers*$seat_fare[$class_name].'<br>';
				  $_SESSION['total_fare']=$number_of_passengers*$seat_fare[$class_name];
				?>
        	</td>
    		</tr>
			</table>
				<style>
    				.pay-now-button {
      							/* Add some styling to the button */
      							background-color: #4CAF50; /* Green background */
      							border: none; /* Remove border */
      							color: white; /* White text */
    						    padding: 15px 32px; /* Some padding */
      							text-align: center; /* Center the text */
      							text-decoration: none; /* Remove underline from link */
								margin-top:40px;
								display: inline-block; /* Make the button a block-level element */
      							font-size: 16px; /* Increase font size */
      							border-radius: 5px; /* Add rounded corners */
     							box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); /* Add a drop shadow effect */
    						}
					body{
						text-align: center;
					}
  				</style>
				<style>
   				 pre {
      			  font-size: 18px;
        		  font-family: Arial, sans-serif;
        		  color: green;
        		  background-color: lightblue;
        		  padding: 10px;
        		  margin: 10px;
        		  border: 1px solid green;
        		  border-radius: 10px;
   				 }
				</style>
				<body>
				<a href="payment.php" class="pay-now-button">Pay Now</a>
				<body>
			</div>
		</div>
		
		
	</div>
</body>
</html>	












