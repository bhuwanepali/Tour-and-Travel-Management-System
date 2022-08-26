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
            <div id="sticky-header" class="menu-area menu-style-three menu-style-four transparent-header">
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
            <section class="breadcrumb-area breadcrumb-style-two breadcrumb-bg" >
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="breadcrumb-content">
                                <h2 class="title">Single Room</h2>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="breadcrumb-price text-end">
                                <p><span>$40</span> / PER NIGHT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- room-area -->
            <section class="room-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="room-details-thumb">
                                <img src="assets/img/room/singleroomcover.jpg" alt="">
                                <ul>
                                    <li class="more"><a href="#">more <i class="flaticon-right"></i></a></li>
                                    <li class="expand"><a href="assets/img/room/room_det_img02.jpg" class="popup-image">Expand <i class="flaticon-full-size"></i></a></li>
                                </ul>
                            </div>
                            <div class="room-details-content">
                                <div class="content-top">
                                    <div class="left-side">
                                        <span class="type">Room Type</span>
                                        <h2 class="title black-title">Single/Individual Person Room</h2>
                                        <ul>
                                            <li>People <span>2</span></li>
                                            <li>bed(s) <span>1 King</span></li>
                                            <li>sq ft <span>89</span></li>
                                            <li>view <span>complete location view</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>All our guestrooms are elegantly furnished with handmade furniture include luxury en-suite facilities with complimentary amenities pack, flat screen LCD TV, tea/coffee making facilities, fan, hairdryer and the finest pure white linen and towels.</p>
                            </div>
                            <div class="ideal-room">
                                <span class="title">ideal for</span>
                                <ul>
                                    <li><a href="#">Individual</a></li>
                                    <li><a href="#">couples</a></li>
                                  
                                    
                                </ul>
                            </div>
                            <div class="room-amenities">
                                <span class="title">IN ROOM AMENITIES</span>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="amenities-item">
                                            <div class="amenities-content">
                                                <div class="content-top">
                                                    <div class="icon">
                                                        <i class="flaticon-double-bed"></i>
                                                    </div>
                                                    <h4 class="title black-title">Bedroom</h4>
                                                </div>
                                                <ul>
                                                    <li>Mini Fridge</li>
                                                    
                                                
                                                    <li>Iron & Ironing Board</li>
                                                    <li>Air Conditioner</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="amenities-item">
                                            <div class="amenities-content">
                                                <div class="content-top">
                                                    <div class="icon">
                                                        <i class="flaticon-bathtub"></i>
                                                    </div>
                                                    <h4 class="title black-title">Bathroom</h4>
                                                </div>
                                                <ul>
                                                    <li>Bath Tub</li>
                                                    <li>Walk-in Shower</li>
                                                    <li>Molten Brown Toiletries</li>
                                                    <li>Robes</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="amenities-item">
                                            <div class="amenities-content">
                                                <div class="content-top">
                                                    <div class="icon">
                                                        <i class="flaticon-wifi-router"></i>
                                                    </div>
                                                    <h4 class="title black-title">Tech</h4>
                                                </div>
                                                <ul>
                                                    <li>Complimentary Wi-Fi</li>
                                                    <li>Large Screen TV</li>
                                                    <li>Telephone</li>
                                                    <li>Google Chromecast</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="amenities-item">
                                            <div class="amenities-content">
                                                <div class="content-top">
                                                    <div class="icon">
                                                        <i class="flaticon-rating"></i>
                                                    </div>
                                                    <h4 class="title black-title">Refreshments</h4>
                                                </div>
                                                <ul>
                                                    
                                                    <li>Elements Restaurants and Jade Bar</li>
                                                    <li>Spa & Fitness Center</li>
                                                    
                                                    <li>Seasonal Outdoor Activities</li>
                                                    <li>Tennis and Pickleball Courts</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <h2 class="title black-title">reviews_</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="review-content mb-30">
                                            <div class="rating">
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                            </div>
                                            <h2 class="title black-title">We’re definitely going dark back!</h2>
                                            <p>Best place to stay in. Amazing services and very friendly staffs.</p>
                                            <h4 class="title-two black-title">Toms Linkon</h4>
                                            <span>January 2022</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="review-content mb-30">
                                            <div class="rating">
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                            </div>
                                            <h2 class="title black-title">Wonder Place</h2>
                                             <p>Fast booking with wonderful hospatility.</p>
                                            <h4 class="title-two black-title">Camille Raz</h4>
                                            <span>September 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-8">
                            <aside class="room-sidebar">
                                <h2 class="title black-title">Liked Our <br> Rooms</h2>
                                <p>Fill up Booking Form to Book This Room.</p>
                                <form action="#">
                                    <button class="btn"><a href="../package_list.php?q=<?php echo $pid;?>">Book</a></button>
                                </form>
                                <div class="sidebar-bottom">
                                    <ul>
                                        <li><a>can we help ?</a></li>
                                        <li><a>+977-9817775300</a></li>
                                    </ul>
                                </div>
                            </aside>
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

<!-- Mirrored from themehut.co/preview/html/roxal/roxal/roxal/room-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Aug 2022 06:40:44 GMT -->
</html>
