<?php
session_start();
?>
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
    <main>
        <!--banner-area-start -->
        <section class="banner">
            <div class="banner-area pt-5 py-5">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-text d-flex  flex-column justify-content-center" style="height: 50vh">
                                <h2 class="banner-heading mb-3 text-color"><div style="color:#146762"> Railway E-Ticket System </div> </h2>
                                <br>
                                <p>Easy - Fast - Reliable</p>
                            </div>
                            <div class="buttons">
                                <div style="background-color: #146762;">
                                <a href="#" class="btn btn-primary px-5 shadow">  Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-img">
                                <img src="img/hm.png" class="img-fluid rounded img-thumbnail" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--banner-area-end -->

        <!-- video-area-start-->
        <section class="pt-5 py-5">
            <div class="video-area">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="section-title">
                                <h2 class="text-color">
                                    <div style="color:#146762;">
                                    Please Watch The Video To Know More
                                    </div>
                                </h2>
                            </div>
                            <div class="col-lg-12">
                                <iframe class='mt-5' width="560" height="315"
                                    src="https://www.youtube.com/embed/UDO4daEf_UI" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-area-end-->

        <!-- service-area-start 
        <section class="pt-5">
            <div class="service-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="service-area-content ">
                                <div class="service-img mb-3">
                                    <img src="img/search.svg" class="img-fluid text-center" alt="">
                                </div>
                                <h3>Search</h3>
                                <p>Choose your origin, destination, journey dates and search for trains</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-area-content ">
                                <div class="service-img mb-3">
                                    <img src="img/select.svg" class="img-fluid text-center" alt="">
                                </div>
                                <h3>Select</h3>
                                <p>Select your desired trip and choose your seats</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-area-content ">
                                <div class="service-img mb-3">
                                    <img src="img/pay.svg" class="img-fluid text-center" alt="">
                                </div>
                                <h3>Pay</h3>
                                <p>Pay for the tickets via Debit / Credit Cards or MFS
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

      
        <section class="mt-5 mb-5">
            <div class="faq-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="faq-img">
                                <img src="img/instruction-secion-image.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-data">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                                aria-controls="panelsStayOpen-collapseOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is hidden
                                                by default, until the collapse plugin adds the appropriate classes that
                                                we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You
                                                can modify any of this with custom CSS or overriding our default
                                                variables. It's also worth noting that just about any HTML can go within
                                                the <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is hidden
                                                by default, until the collapse plugin adds the appropriate classes that
                                                we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You
                                                can modify any of this with custom CSS or overriding our default
                                                variables. It's also worth noting that just about any HTML can go within
                                                the <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq-area-end -->
    </main>
    <!-- main body end -->
    

    <!-- footer-area-start -->
    <footer class="footer border-top">
        <div style="background-color:#cee4e1;">
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