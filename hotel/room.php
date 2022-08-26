<!doctype html>
<html class="no-js" lang="EN">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Hotel Booking</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/odometer.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/datepicker.css">
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div class="loader">
                    <div class="loader-outter"></div>
                    <div class="loader-inner"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area menu-style-three menu-style-four transparent-header" style="display:none;">
                <div class="container-fulid">
                    <div class="row g-0">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
                                    <div class="nav-logo"><a href="index.html"><img src="assets/img/logo/logo_2.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->
        <?php
            $pid = $_GET['q'];
        ?>
        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" >
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="breadcrumb-content">
                                <h2 class="title">our Rooms</h2>
                                <p>welcome to paradise</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a>home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">room List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- room-area -->
            <section class="room-area">
                <div class="container">
                    <div class="row align-items-center justify-content-center mb-60">
                        <div class="col-lg-6">
                            <div class="section-title">
                                <h2 class="title black-title">Availability and Rates</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="room-content-top">
                                <i class="flaticon-sun"></i>
                                <p><span>Book with peace of mind</span> Cancel your reservation up to 3 days before check-in for a full refund</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-10">
                            <div class="room-item wow fadeInUp"  data-wow-delay=".4s">
                                <div class="row align-items-center">
                                    <div class="col-lg-5">
                                        <div class="room-thumb">
                                            <div class="room-active-two">
                                                <img src="assets/img/room/singleroom1.jpg" alt="">
                                                <img src="assets/img/room/singleroom2.jpg" alt="">
                                                <img src="assets/img/room/singleroom3.jpg" alt="">
                                                <img src="assets/img/room/singleroom4.jpg" alt="">
                                            </div>
                                            <a href="#" class="room-gallery"><i class="flaticon-picture"></i>4</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="room-content">
                                            <div class="content-top">
                                                <h3 class="title black-title"><a>Individual Room</a></h3>
                                                <p class="price"><span>USD $40</span>Stay price</p>
                                            </div>
                                            <div class="room-facilities">
                                                <ul>
                                                    <li><i class="flaticon-double-bed"></i>1 Bedroom</li>
                                                    <li><i class="flaticon-sofa-2"></i>4 Guest</li>
                                                    <li><i class="flaticon-bathtub-1"></i>1 Bathroom</li>
                                                    <li><i class="flaticon-fullscreen"></i>89 Sq ft</li>
                                                </ul>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="row align-items-end">
                                                    <div class="col-md-8">
                                                        <div class="room-features">
                                                            <h5 class="title">Features</h5>
                                                            <ul>
                                                                <li>Single bed</li>
                                                                <li>Air conditioning</li>
                                                                <li>Television</li>
                                                                <li>Cable TV</li>
                                                                <li>Streaming device</li>
                                                                <li>Wi-Fi</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="room-details-btn text-end">
                                                            <a href="singleroom.php?q=<?php echo $pid;?>" class="btn">See Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="room-item wow fadeInUp"  data-wow-delay=".4s">
                                <div class="row align-items-center">
                                    <div class="col-lg-5">
                                        <div class="room-thumb">
                                            <div class="room-active-two">
                                                <img src="assets/img/room/familyroom1.jpg" alt="">
                                                <img src="assets/img/room/familyroom2.jpg" alt="">
                                                <img src="assets/img/room/familyroom3.jpg" alt="">
                                                <img src="assets/img/room/familyroom4.jpg" alt="">
                                            </div>
                                            <a href="#" class="room-gallery"><i class="flaticon-picture"></i>4</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="room-content">
                                            <div class="content-top">
                                                <h3 class="title black-title"><a>Family Room</a></h3>
                                                <p class="price"><span>USD $70</span>Stay price</p>
                                            </div>
                                            <div class="room-facilities">
                                                <ul>
                                                    <li><i class="flaticon-double-bed"></i>2 Bedroom</li>
                                                    <li><i class="flaticon-sofa-2"></i>5 Guest</li>
                                                    <li><i class="flaticon-bathtub-1"></i>1 Bathroom</li>
                                                    <li><i class="flaticon-fullscreen"></i>94 Sq ft</li>
                                                </ul>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="row align-items-end">
                                                    <div class="col-md-8">
                                                        <div class="room-features">
                                                            <h5 class="title">Features</h5>
                                                            <ul>
                                                                <li>2 Twin bed</li>
                                                                <li>Air conditioning</li>
                                                                <li>Television</li>
                                                                <li>Cable TV</li>
                                                                <li>Streaming device</li>
                                                                <li>Wi-Fi</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="room-details-btn text-end">
                                                            <a  href="familyroom.php?q=<?php echo $pid;?>" class="btn">See Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="room-item wow fadeInUp"  data-wow-delay=".4s">
                                <div class="row align-items-center">
                                    <div class="col-lg-5">
                                        <div class="room-thumb">
                                            <div class="room-active-two">
                                                <img src="assets/img/room/grouproom1.jpg" alt="">
                                                <img src="assets/img/room/grouproom2.jpg" alt="">
                                                <img src="assets/img/room/grouproom3.jpg" alt="">
                                                <img src="assets/img/room/grouproom4.jpg" alt="">
                                            </div>
                                            <a href="#" class="room-gallery"><i class="flaticon-picture"></i>4</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="room-content">
                                            <div class="content-top">
                                                <h3 class="title black-title"><a>Group Room</a></h3>
                                                <p class="price"><span>USD $70</span>Stay price</p>
                                            </div>
                                            <div class="room-facilities">
                                                <ul>
                                                    <li><i class="flaticon-double-bed"></i>4 Bedroom</li>
                                                    <li><i class="flaticon-sofa-2"></i>6 Guest</li>
                                                    <li><i class="flaticon-bathtub-1"></i>2 Bathroom</li>
                                                    <li><i class="flaticon-fullscreen"></i>120 Sq ft</li>
                                                </ul>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="row align-items-end">
                                                    <div class="col-md-8">
                                                        <div class="room-features">
                                                            <h5 class="title">Features</h5>
                                                            <ul>
                                                                <li>Twin bed</li>
                                                                <li>Air conditioning</li>
                                                                <li>Television</li>
                                                                <li>Cable TV</li>
                                                                <li>Streaming device</li>
                                                                <li>Wi-Fi</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="room-details-btn text-end">
                                                            <a href="familyroom.php?q=<?php echo $pid;?>" class="btn">See Details</a>
                                                        </div>
                                                    </div>
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
            <!-- room-area-end -->
        </main>
        <!-- main-area-end -->

        <!-- JS here -->
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.odometer.min.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/datepicker.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from themehut.co/preview/html/roxal/roxal/roxal/room.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Aug 2022 06:40:42 GMT -->
</html>
