<?php


session_start();
if(isset($_SESSION['name'])){}
	else{
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
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
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

	<!-- Navigation bar -->
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
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo.jpg"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 $_SESSION['schedule']=$_GET['schedule'];
			 ?>
			
			
			</div>
			<div id="heading">
				<a href="home.php">RAILTICKET.COM</a>
			</div>
			</div>
		</div>
		
		<div class="span12 well">
		
		
		<div class="display" style="margin-top:100px;height:30px;">
		
		
		<div style= "top:200px;">
		
		<form method="get" action="booking.php">
				
				<table class="table" style="border-style:ridge;">
				<col width="99">
				<col width="50">
				<col width="50">
				<col width="80">
				<col width="80">
				<col width="70">
				<col width="70">
				<col width="70">
				<col width="70">
				<col width="70">
				<col width="90">
				<tr>
					<th style="border-top:0px;">Journey date:</th>
					<th style="border-top:0px;"> Train No./Name:</th>
					<th style="border-top:0px;"> Schedule ID:</th>
					<th style="border-top:0px;">From Station:</th>
					<th style="border-top:0px;">To Station:</th>
					<th style="border-top:0px;"> SHOVON</th>
					<th style="border-top:0px;"> SHULOV </th>
					<th style="border-top:0px;"> BERTH </th>
					<th style="border-top:0px;"> AC </th>
				</tr>
				<tr>
					<td style="border-top:0px;"> <?php echo $_GET['doj'];?> </td>
					<input name="doj" style="display:none;" type="text" value="<?php echo $_GET['doj'];?>">
					<input name="dob" style="display:none;" type="text" value="<?php echo date("Y-m-d");?>">
					<td style="border-top:0px;"> <?php echo $_GET['tno'];?> </td>
					<input name="tno" style="display:none;" type="text" value="<?php echo $_GET['tno'];?>"> </td>
					<td style="border-top:0px;"> <?php echo $_GET['schedule'];?> </td>
					<input name="tno" style="display:none;" type="text" value="<?php echo $_GET['schedule'];?>"> </td>
					
					<td style="border-top:0px;"><?php echo $_GET['fromstn'];?></td>
					<input name="fromstn" style="display:none;" type="text" value="<?php echo $_GET['fromstn'];?>"> </td>
					
					<td style="border-top:0px;"><?php echo $_GET['tostn'];?></td>
					<input name="tostn" style="display:none;" type="text" value="<?php echo $_GET['tostn'];?>"> </td>

					<td style="border-top:0px;"> <input type="radio" name="selct" value="SHOVON" onclick="return false;" <?php if($_GET['class']=='SHOVON') {echo 'checked';}?>> </td>
					
					<td style="border-top:0px;"> <input type="radio" name="selct" value="SHULOV" onclick="return false;" <?php if($_GET['class']=='SHULOV') echo 'checked';?>> </td>
					
					<td style="border-top:0px;"> <input type="radio" name="selct" value="BERTH" onclick="return false;" <?php if($_GET['class']=='BERTH') echo 'checked';?>> </td>
					
					<td style="border-top:0px;"> <input type="radio" name="selct" value="AC" onclick="return false;" <?php if($_GET['class']=='AC') echo 'checked';?>> </td>
				</tr>
				</table>
				</div>
				
		</div>
		</div>
		<div class="display" style="height:50px;">
				
		
		<br /><br />
		<div class="display" style="margin-top:100px;height:415px;background: rgb(109,105,180);
background: linear-gradient(153deg, rgba(109,105,180,1) 0%, rgba(255,255,255,1) 45%, rgba(6,205,164,1) 100%, rgba(0,212,255,1) 100%);">
		<div style= "text-align: center">
		<h2> <B> Passenger Detail</B></h2>
		</div>
			<table class="table">
				<tr>
					<th style="width:100px;border-top:0px;">SNo.</th>
					<th style="width:200px;border-top:0px;"> Name</th>
					<th style="width:100px;border-top:0px;"> Age </th>
					<th style="width:100px;border-top:0px;"> Sex </th>
				</tr>
				<tr>
					<td > 1</td>
					<td ><input type="text" name="name1" ></td>
					<td ><input type="text" name="age1" class="input-small"></td>
					<td ><select name="sex1" class="input-small">
						<option value="male">MALE</option>
						<option value="female">FEMALE</option>
						</select>
					</td>
				</tr>
				<tr>
					<td > 2</td>
					<td ><input type="text" name="name2" ></td>
					<td ><input type="text" name="age2" class="input-small"></td>
					<td ><select name="sex2" class="input-small">
						<option value="male">MALE</option>
						<option value="female">FEMALE</option>
						</select>
					</td>
				</tr>
				<tr>
					<td > 3</td>
					<td ><input type="text" name="name3" ></td>
					<td ><input type="text" name="age3" class="input-small"></td>
					<td ><select name="sex3" class="input-small">
						<option value="male">MALE</option>
						<option value="female">FEMALE</option>
						</select>
					</td>
			</tr>
				<tr>
					<td style="border-top:0px;"><input class="btn btn-info"type="submit" value="Submit" id="subb" ></td>
					<td style="border-top:0px;"><input class="btn btn-info"type="reset" value="Reset"></td>
				</tr>	
				
			</table>
			</form>
		</div>
		
		<div>
		<br  />
		<p> <font color="red"> CHILDREN BELOW 5 YEAR (FOR WHOM TICKET IS NOT TO BE ISSUED). </font> </p>
		</div>
		
		</div>	
	</div>
</body>
</html>