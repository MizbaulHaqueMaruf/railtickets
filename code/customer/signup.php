<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Ticket</title>
    <!--bootstrap-css-->
    <link rel="stylesheet" href="css/signupCSS.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	 <!--custom-css-->
	 <link rel="stylesheet" href="css/style.css">
	
</head>
<body>

	
<header>
</header>
    <!-- registration form -->
		<div align="center">
			<div style="padding: 20px 20px 20px 20px; background-color:black;margin-right: 20px">
		<div class="span12-well">
		<div style="font-size:40px; color:white"><u> Please Enter your information</u></div>
		<br/>
		
		
		<div class="table">
		
		<form name="signup"  method="post" action="register.php" onsubmit="return valid12()">
		<table>

		<tr>
			<td style="border-top:0px;padding:10px 20px 10px 20px;color:white;"><b> First Name </b> <font color=red>* </font></td>
			<td style="border-top:0px;padding:10px 20px 10px 20px;"><input type="text" name="f_name" class="input-block-level" placeholder="Enter the First name" onblur="return name1()"><span id="fn"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;padding:10px 20px 10px 20px;color:white;"><b> Last Name</b> <font color=red>* </font> </td>
			<td style="border-top:0px;padding:10px 20px 10px 20px;"><input type="text" name="l_name" class="input-block-level" placeholder="Enter the Last name" onblur="return name12()"><span id="ln"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;padding:10px 20px 10px 20px;color:white;"><b> Email ID</b> <font color=red>* </font> </td>
			<td style="border-top:0px;padding:10px 20px 10px 20px;"><input type="email" class="input-block-level" name="eid" placeholder="Enter the valid email id"></td>
		</tr>
		<tr>
			<td style="border-top:0px;padding:10px 20px 10px 20px;color:white;"><b> Password </b><font color=red>* </font> </td>
			<td style="border-top:0px;padding:10px 20px 10px 20px;"><input type="password" class="input-block-level" name="password"
   							 minlength="8" placeholder="Enter the password" onblur="return check1()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required > <span id="ps" ></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;padding:10px 20px 10px 20px;color:white;"><b> Confirm Password</b> <font color=red>* </font> </td>
			<td style="border-top:0px;padding:10px 20px 10px 20px;"><input type="password" class="input-block-level" name="cpsd" placeholder="Re-type the password" onblur="return confirm1()"> <span id="cps" ></span></td>
		</tr>
		
		<tr>
			<td style="border-top:0px;padding:10px 20px 10px 20px;color:white;"><b> Gender</b> <font color=red>* </font> </td>
			<td style="border-top:0px;padding:10px 20px 10px 20px;"><select name="gender">
				<option value="male">MALE</option>
				<option value="female">FEMALE</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;padding:10px 20px 10px 20px;color:white;"><b> Date of Birth</b> <font color=red>* </font></td>
			<td style="border-top:0px;padding:10px 20px 10px 20px;"><input type="date" class="input-block-level input-medium"  name="dob" max="<?php echo date('Y-m-d',time()-60*60*24*365*18);?>" value="<?php echo date('Y-m-d',time()-60*60*24*365*18);?>"> </td>
		</tr>
		<tr>
			<td style="border-top:0px;padding:10px 20px 10px 20px;"><input class="btn btn-info"type="submit" value="submit" id="subb" ></td>
			<td style="border-top:0px;padding:10px 20px 10px 20px;"><input class="btn btn-info"type="reset" value="Reset"></td>
		</tr>
		</table>
		<a href="home.php">Return to home page</a>
		</form>
		</div>
		</div>
		</div>
		</div>
</body>
<style>
body {
  background-image: url('img/ss.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</html>