<?php  
session_start();
if(isset($_SESSION['name'])){}
	else{
		header("location:customer-login.php");
		
	}
	
require('connection.php');
$tbl_name="route";
mysqli_select_db($conn,"$db_name") or die("cannot select db");
$tostn = '';
$fromstn = '';
$doj = '';
if(isset($_POST['from']) && isset($_POST['to']))
{	$k=1;
	$doj = $_POST['date'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	$sql="SELECT id FROM $tbl_name WHERE (start='$from' and stop ='$to')";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
			$output=mysqli_fetch_assoc($result);
			$route_id=$output['id'];
			$sql2="SELECT schedule.id as schedule_id , schedule.train_id, schedule.route_id,
			schedule.date,schedule.time,schedule.SHOVON, schedule.SHULOV, schedule.BERTH,
			schedule.AC,train.Number,train.name,route.id, route.start,route.stop   
			from (schedule,train,route) 
			WHERE (schedule.route_id= route.id And train.Number= schedule.train_id And schedule.date ='$doj')";
			$result=mysqli_query($conn, $sql2);
	}
}
else if((!isset($_POST['from'])) && (!isset($_POST['to'])))
{	$k=0;
	$from="";
	$to="";
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
	<!--bootstrap-css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	 <!--custom-css-->
	 <link rel="stylesheet" href="css/style.css">
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
	@import url("https://fonts.googleapis.com/css?family=Sofia");
	
</head>
<body>
	<div style="background: rgb(205,212,211);
background: radial-gradient(circle, rgba(205,212,211,1) 100%, rgba(150,192,195,1) 100%, rgba(95,152,153,1) 100%, rgba(24,133,128,0.40129555240064774) 100%, rgba(20,153,212,0.8382703423166141) 100%, rgba(67,111,120,0.45171572046787467) 100%, rgba(18,150,176,0.342472022988883) 100%);">
	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px; top:50px;">
				<img src="images/flogo.jpg"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:70px;">
			
			<?php  
			 if(isset($_SESSION['name']))
			 {
				echo "Welcome, ".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
				$_SESSION['error']=15;
				header("location:customer-login.php")
			 ?>  
				<a href="customer-login.php" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.php" class="btn btn-info">Signup</a>
			<?php   } ?>
			
			</div>
			<div id="heading">
				<a href="home.php" >Railway System</a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		<nav class="navbar navbar-expand-lg bg-light shadow fixed-top">
            <div class="container">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src= "img/flogo.png" alt="" width="60" height="60" class="d-inline-block align-text-top">
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
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
		
		<div class="row">
			<!-- find train with qouta-->
			<div style= "position:absolute; top:150px" >
			<div class="span4 well">
			<form method="post" action="reservation.php">
			<table class="table">
			<div style="Text-align: center; font-family: 'Sofia','sans-serif'">
				<div class="headd">
					
					<h1>
						Search for Train<br>
					</h1>
					
				</div>
			</div>
			<div style="margin-top: 50px">
				<tr>
					<th style="border-top:0px;"><label> From <label></th>
					<td style="border-top:0px;"><input type="text" class="input-block-level" name="from" id="fr" ></td>
				</tr>
				<tr>
					<th style="border-top:0px;"><label> To <label></th>
					<td style="border-top:0px;"><input type="text" class="input-block-level" name="to" id="to1" ></td>
				</tr>
				<tr>
					<th style="border-top:0px;"><label> Date<label></th>
					<td style="border-top:0px;"><input type="date" class="input-block-level input-medium" name="date" max="<?php echo date('Y-m-d',time()+60*60*24*90);?>" min="<?php echo date('Y-m-d')?>" value="<?php if(isset($_POST['date'])){echo $_POST['date'];}else {echo date('Y-m-d');}?>"> </td>
				</tr>
				<tr>
					<td style="border-top:0px;"><input class="btn btn-info" type="submit" value="OK"></td>
					<td style="border-top:0px;"><a href="reservation.php" class="btn btn-info" type="reset" value="Reset">Reset</a></td>
				</tr>
				</div>
			</table>
			</form>
			</div>
			</div>
		<!-- display train -->
		<div style="position: absolute; top:450px;background: rgb(205,212,211);
background: radial-gradient(circle, rgba(205,212,211,1) 100%, rgba(150,192,195,1) 100%, rgba(95,152,153,1) 100%, rgba(24,133,128,0.40129555240064774) 100%, rgba(20,153,212,0.8382703423166141) 100%, rgba(67,111,120,0.45171572046787467) 100%, rgba(18,150,176,0.342472022988883) 100%);">
			<div class="span8 well">
				<div class="display" style="height:30px;">
				<table class="table">
				<tr>
					<th style="width:70px;border-top:0px;"> Train No.</th>
					<th style="width:239px;border-top:0px;"> Train Name </th>
					<th style="width:30px;border-top:0px;"> Origin </th>
					<th style="width:10px;border-top:0px;"> Destination </th>
					<th style="width:10px;border-top:0px;"> Arrival </th>
					<th style="width:20px;border-top:0px;"> Departure </th>
					<th style="width:150px;border-top:0px;"></th>
				</tr>
				</table>
				</div>
				<div class="display" style="margin-top:0px;overflow:auto;">
				<table class="table">
				
				<?php  
					
					if($k==1)
					{
						
						echo "<script> document.getElementById(\"fr\").value=\"$from\";
									   document.getElementById(\"to1\").value=\"$to\";
									   
							</script>";
						$n=0;
						while($row=mysqli_fetch_array($result)){
					//$q="from: ".$from;
						if($from==$row['start'])
						{	$q=$row['time'];
							$p1=substr($q,0,2);
							$p2=substr($q,3,2);
							$p2=$p2+5;
							if($p2<10)
							{$p2="0".$p2;}
							$d=$p1.":".$p2;
							$fromstn=$row['start'];
							$tostn=$row['stop'];
							$schedule=$row['schedule_id'];
					
				
				?>
				<tr class="text-error">
					<td style="width:70px;"> <?php   echo $row['Number']; ?> </td>
					<td style="width:260px;"> <?php echo $row['name']; ?> </a></td>
					<td style="width:30px;"> <?php echo $row['start']; ?> </td>
					<td style="width:120px;"> <?php echo $row['stop']; ?> </td>
					<td style="width:75px;"> <?php   echo  $q; ?> </td>
					<td style="width:65px;"> <?php   echo  $d; ?> </td>
					<td style="width:200px;">  
					<a class="text-info" href="reser.php?tno=<?php echo$row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>&schedule=<?php echo $schedule ?>&class=<?php echo "SHOVON";?>"><b>SHOVON</b> </a> 
						<a class="text-info" href="reser.php?tno=<?php echo$row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>&schedule=<?php echo $schedule ?>?>&class=<?php echo "SHULOV";?>"><b>SHULOV</b></a>
						<a class="text-info" href="reser.php?tno=<?php echo$row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>&schedule=<?php echo $schedule ?>?>&class=<?php echo "BERTH";?>"><b>BERTH</b></a>
						<a class="text-info" href="reser.php?tno=<?php echo$row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>&schedule=<?php echo $schedule ?>?>&class=<?php echo "AC";?>"><b>AC</b></a>
						
					</td>
					</tr>
				<?php  
					}
					else
					{
						$q=$row['time'];
						$p1=substr($q,0,2);
						$p2=substr($q,3,2);
						$p2=$p2+5;
						if($p2<10){
							$p2="0".$p2;
						}
						$d=$p1.":".$p2;
						$fromstn=$row['start'];
						$tostn=$row['stop'];
						$schedule=$row['schedule_id'];
				?>
				<tr class="text-info">
					<td style="width:70px;"> <?php  echo $row['Number']; ?> </td>
					<td style="width:260px;"><?php  echo $row['name']; ?> </a> </td>
					<td style="width:30px;"> <?php  echo $row['start']; ?> </td>
					<td style="width:120px;"> <?php  echo $row['stop']; ?> </td>
					<td style="width:75px;"> <?php  echo $q; ?> </td>
					<td style="width:65px;"> <?php  echo $d; ?> </td>
					<td style="width:200px;">
						<a class="text-info" href="reser.php?tno=<?php echo$row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>?>&schedule=<?php echo $schedule ?>&class=<?php echo "SHOVON";?>"><b>SHOVON</b> </a> 
						<a class="text-info" href="reser.php?tno=<?php echo$row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>?>&schedule=<?php echo $schedule ?>&class=<?php echo "SHULOV";?>"><b>SHULOV</b></a>
						<a class="text-info" href="reser.php?tno=<?php echo$row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>?>&schedule=<?php echo $schedule ?>&class=<?php echo "BERTH";?>"><b>BERTH</b></a>
						<a class="text-info" href="reser.php?tno=<?php echo$row['Number']?>&fromstn=<?php echo $fromstn ?>&tostn=<?php echo $tostn ?>&doj=<?php echo $doj ?>?>&schedule=<?php echo $schedule ?>&class=<?php echo "AC";?>"><b>AC</b></a>
					</td>
				</tr>
				<?php  
					}
					$n++;
					}
				}
				else
				{
					echo "<div class=\"alert alert-error\"  style=\"margin:100px 180px;\"> please search the train.. </div>";
				}
					
					mysqli_close($conn);
				?> 
				</table>
				</div>
			</div>
			</div>
		</div>
		</div>
</body>
</html>