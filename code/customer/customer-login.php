<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Ticket</title>
    <!--bootstrap-css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--custom-css-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <!-- header section-start -->
    <header>
        <!-- navbar-start -->
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
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customer-login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- navbar-start -->
    </header>
    <!-- header section-end -->
    <!-- main body start -->

    <section class="ftco-section">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Customer Login</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Welcome to login</h2>
                                <p>Don't have an account?</p>
                                <a href="signup.php" class="btn btn-white btn-outline-white">Sign Up</a>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div>
                                <h3 class="mb-4">Sign In As :</h3>
                            </div>
                            <div class="d-flex">

                                <!-- <div class="w-100 d-flex">

                                    <div class="sign-in-btn d-flex mb-3">
                                        <a href="../adminPanel/pro/adminreg.php" class="ms-2"><button type="button"
                                                class="btn btn-outline-danger ms-2">Admin panel</button></a>
                                        <a href="ticket-counter-login.php" class="ms-2"> <button type="button"
                                                class="btn btn-outline-danger">Ticket Counter
                                                Panel</button></a>


                                    </div>

                                </div> -->

                            </div>
                            <div align="center">
                            <?php
			                if(isset($_SESSION['error'])){
			                        if(isset($_SESSION['name'])){
				                        //echo "nikul";
			                        }
			                        else if($_SESSION['error']==15){
			                    	//echo "hilgr";
		                            ?>
				                    <div class="alert alert-error"><font size="5"> Please Login First..</font> 
			                    	</div>
		                            <?php	 
                                    }
			                    }
			                    //else{ echo "hi";}
		                    ?>
                            <div  class=" well login">
			                <form class="form-signin " method="post" action="User_log.php">
		
			                <table class="table" style="margin-bottom:4px;">
			
			                <tr>
			                <td style="border-top:0px;"><label> Username</label></td>
			                <td style="border-top:0px;"> <input type="email" name="username" class="input-block-level" placeholder="Username"></td>
			                </tr>
			                <tr >
			                <td style="border-top:0px;"> <label>Password</label></td>
		                	<td style="border-top:0px;"><input type="password" name="password" class="input-block-level" placeholder="password"></td>
			                </tr>
			                <tr>
			                <td colspan=2 style="border-top:0px; visibility:hidden;" id="wrong"  class="label label-important">Username and Password Wrong !!!</td>
		                	</tr>
			                <tr>
			                <td style="border-top:0px;"></td>
			                <td style="border-top:0px;"> <input class="btn btn-info" type="submit" value="Login"></td>
			                </tr>
			                <tr>
			                <td colspan="2" style="border-top:0px;"> <p> Don't remember your password?</p></td>
			                </tr>
			                <tr>
			                <td style="border-top:0px;"></td>
			                <td style="border-top:0px;margin-right:20px;"> <a class="btn btn-info" href="forgot-password.php">Click here</a></td>
		                	</tr>
		                    </table>
		                	</form>
		</div>
		
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <!-- main body end -->
    <!-- footer-area-start -->
    <footer class="footer border-top">
        <div style="background-color:#cee4e1">
        <div class="container footer-container ">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-img">
                        <img src="img/flogo.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-menu">
                        <a href="#">Terms Condition</a>
                        <a href="#">Privacy Policy</a>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="copyright-text">
                        <p>Copyright @2022 RailWay System Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- footer-area-end -->

    <!--connect-booststrap-js-file -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
if(isset($_SESSION['error']))
{
if($_SESSION['error']==1)
echo "<script>document.getElementById(\"wrong\").style.visibility=\"\";</script>";
session_destroy();
}

?>	