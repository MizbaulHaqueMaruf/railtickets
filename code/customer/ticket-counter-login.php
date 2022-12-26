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
                            <img src="img/logo.png" alt="" width="60" height="60" class="d-inline-block align-text-top">
                        </a>
                        <a href="#" class="logo-text"><span>Railway System</span></a>
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
                            <a class="nav-link" href="home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customer-login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
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
                    <h2 class="heading-section">Ticket Counter Login</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Welcome to login</h2>
                                <p>Don't have an account?</p>
                                <a href="#" class="btn btn-white btn-outline-white">Sign Up</a>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div>
                                <h3 class="mb-4">Sign In As :</h3>
                            </div>
                            <div class="d-flex">

                                <div class="w-100 d-flex">

                                    <div class="sign-in-btn d-flex mb-3">
                                        <a href="customer-login.html" class="ms-2"><button type="button"
                                                class="btn btn-outline-danger ms-2">Customer Panel</button></a>
                                        <a href="admin-login.html" class="ms-2"> <button type="button"
                                                class="btn btn-outline-danger">Admin Panel</button></a>


                                    </div>

                                </div>

                            </div>
                            <form action="#" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">Sign
                                        In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- main body end -->
    <!-- footer-area-start -->
    <footer class="footer border-top">
        <div class="container footer-container ">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-img">
                        <img src="img/logo.png" alt="">
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
    </footer>
    <!-- footer-area-end -->

    <!--connect-booststrap-js-file -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>