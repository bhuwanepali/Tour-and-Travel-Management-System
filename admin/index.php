<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tour and Travel management system</title>
        <link rel="shortcut icon" href="../images/logo.jpg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <!-- <script type="text/javascript">
            function preventBack(){window.history.forward()};
            setTimeout("preventBack()",0);
            window.onunload=function(){null;}
        </script> -->
    </head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header-toggle">
                <i class="fas fa-bars" id="header-toggle"></i>
            </div>
            <div class="head" style="width:100%;text-align:center;font-size:20px;text-transform:uppercase;color:#30637c;">
                <label for="">Tour and Travel management system</label>
            </div>
            <div class="action">
                <?php include "../db.php";
                    if(isset($_SESSION["id"])){
                        $id = $_SESSION["id"];
                        $sql = "SELECT a_photo FROM admin_details WHERE id = $id";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query); ?>
                    <div class="profile"  onClick="menuToggle();">
                        <?php echo "<img src='img/".$row['a_photo']."'>";?>
                    </div>
                    <div class="menu">
                        <span>Admin</span>
                        <ul>
                            <li><a href="adminprofile.php"><i class="fas fa-id-card"></i> My profile</a></li>
                            <li><a href="pchange.php"><i class="fas fa-key"></i> Change password</a></li>
                            <li><a href="editp.php"><i class="fas fa-user-edit"></i> Edit profile</a></li>
                            <li><a href="logout.php"><i class="fas fa-sign-out-alt"> </i>Logout</a></li>
                        </ul>
                    </div>
                </div><?php
                    }else{
                        echo '<script>Operation Unsuccessful!!!<br>Please login again!!!</script>';
                    }?>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a class="nav-logo">
                        <img src="../images/logo.jpg" alt="">
                        <span class="nav-logo-name">TTMS</span>
                    </a>
                    <div class="nav-list">
                        <a href="index.php" class="nav-link active">
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="nav-name">Dashboard</span>
                        </a>

                        <a href="manage_customer.php" class="nav-link">
                            <i class="fas fa-users-cog"></i>
                            <span class="nav-name">Manage Customer</span>
                        </a>
                        <a href="manage_place.php" class="nav-link">
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="nav-name">Manage Place</span>
                        </a>
                        <a href="manage_gallery.php" class="nav-link">
                            <i class="far fa-image"></i>
                            <span class="nav-name">Manage Gallery</span>
                        </a>
                        <a href="manage_videos.php" class="nav-link">
                            <i class="fas fa-video"></i>
                            <span class="nav-name">Manage video</span>
                        </a>
                        
                        <a href="manage_transportation.php" class="nav-link">
                            <i class="fas fa-bus"></i>
                            <span class="nav-name">Manage transport</span>
                        </a>

                        <a href="manage_hotel.php" class="nav-link">
                            <i class="fas fa-h-square"></i>
                            <span class="nav-name">Manage hotel</span>
                        </a>

                        <a href="manage_booking.php" class="nav-link">
                            <i class="fas fa-book-reader"></i>
                            <span class="nav-name">Manage booking</span>
                        </a>

                        <a href="manage_billing.php" class="nav-link">
                            <i class="fas fa-money-check-alt"></i>
                            <span class="nav-name">Manage billing</span>
                        </a>
                        <a href="feedback.php" class="nav-link">
                            <i class="far fa-comments"></i>
                            <span class="nav-name">Feedbacks</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="dashboard">
            <div class="card-container">
                <div class="pcontainer">
                    <i class="fas fa-users"></i>
                    <div class="card">
                        Users
                    </div>
                    <?php 
                        include "../db.php";
                        $sql = "SELECT c_id FROM user_details";
                        $query = mysqli_query($con,$sql);
                        if($query){
                            $count = mysqli_num_rows($query);?>
                    <div class="card"><?php echo $count; ?></div>
                    <?php } ?>
                </div>
                <div class="pcontainer">
                    <i class="fas fa-book"></i>
                    <div class="card">
                        Bookings
                    </div>
                    <?php 
                        include "../db.php";
                        $sql = "SELECT boo_id FROM bookings";
                        $query = mysqli_query($con,$sql);
                        if($query){
                            $count = mysqli_num_rows($query);?>
                    <div class="card"><?php echo $count; ?></div>
                    <?php } ?>
                </div>
                <div class="pcontainer">
                    <i class="fas fa-briefcase"></i>
                    <div class="card">
                        Packages
                    </div>
                    <?php 
                        include "../db.php";
                        $sql = "SELECT pid FROM packages";
                        $query = mysqli_query($con,$sql);
                        if($query){
                            $count = mysqli_num_rows($query);?>
                    <div class="card"><?php echo $count; ?></div>
                    <?php } ?>
                </div>
                <div class="pcontainer">
                    <i class="far fa-user"></i>
                    <div class="card">
                        Subscribers
                    </div>
                    <?php 
                        include "../db.php";
                        $sql = "SELECT id FROM subscribers";
                        $query = mysqli_query($con,$sql);
                        if($query){
                            $count = mysqli_num_rows($query);?>
                    <div class="card"><?php echo $count; ?></div>
                    <?php } ?>
                </div>
                <div class="pcontainer">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="card">
                        Places
                    </div>
                    <?php 
                        include "../db.php";
                        $sql = "SELECT p_id FROM place_details";
                        $query = mysqli_query($con,$sql);
                        if($query){
                            $count = mysqli_num_rows($query);?>
                    <div class="card"><?php echo $count; ?></div>
                    <?php } ?>
                </div>
                <div class="pcontainer">
                    <i class="far fa-user"></i>
                    <div class="card">
                        Staffs
                    </div>
                    <?php 
                        include "../db.php";
                        $sql = "SELECT sid FROM staffs";
                        $query = mysqli_query($con,$sql);
                        if($query){
                            $count = mysqli_num_rows($query);?>
                    <div class="card"><?php echo $count; ?></div>
                    <?php } ?>
                </div>
                <div class="pcontainer">
                    <i class="far fa-image"></i>
                    <div class="card">
                        Gallery
                    </div>
                    <?php 
                        include "../db.php";
                        $sql = "SELECT id FROM gallery";
                        $query = mysqli_query($con,$sql);
                        if($query){
                            $count = mysqli_num_rows($query);?>
                    <div class="card"><?php echo $count; ?></div>
                    <?php } ?>
                </div>
                <div class="pcontainer">
                    <i class="fas fa-video"></i>
                    <div class="card">
                        Media
                    </div>
                    <?php 
                        include "../db.php";
                        $sql = "SELECT vid FROM videos";
                        $query = mysqli_query($con,$sql);
                        if($query){
                            $count = mysqli_num_rows($query);?>
                    <div class="card"><?php echo $count; ?></div>
                    <?php } ?>
                </div>
                <div class="pcontainer">
                    <i class="fas fa-parking"></i>
                    <div class="card">
                        Province
                    </div>
                    <?php 
                        include "../db.php";
                        $sql = "SELECT id FROM province";
                        $query = mysqli_query($con,$sql);
                        if($query){
                            $count = mysqli_num_rows($query);?>
                            <div class="card"><?php echo $count; ?></div>
                    <?php } ?>
                </div>
                <div class="pcontainer">
                    <i class="far fa-comments"></i>
                    <div class="card">
                        Feedbacks
                    </div>
                    <?php 
                        include "../db.php";
                        $sql = "SELECT review_id FROM reviews";
                        $query = mysqli_query($con,$sql);
                        if($query){
                            $count = mysqli_num_rows($query);?>
                    <div class="card"><?php echo $count; ?></div>
                    <?php } ?>
                </div>
                <div class="pcontainer">
                    <i class="fas fa-hotel"></i>
                    <div class="card">
                        Hotels
                    </div>
                    <?php 
                        include "../db.php";
                        $sql = "SELECT id FROM hotel";
                        $query = mysqli_query($con,$sql);
                        if($query){
                            $count = mysqli_num_rows($query);?>
                    <div class="card"><?php echo $count; ?></div>
                    <?php } ?>
                </div>
                <div class="pcontainer">
                    <i class="fas fa-bus"></i>
                    <div class="card">
                        Transportation
                    </div>
                    <?php 
                        include "../db.php";
                        $sql = "SELECT id FROM transportation";
                        $query = mysqli_query($con,$sql);
                        if($query){
                            $count = mysqli_num_rows($query);?>
                    <div class="card"><?php echo $count; ?></div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Footer section starts --> 
        <div class="footer">
            <div class="foot">
                <div class="credit">&copy; 2021 - <script>const d = new Date();document.write(d.getFullYear());</script> | Created by ACME Students | all rights reserved!</div>
            </div>
        </div>
        <!-- footer section ends -->
        <!-- MAIN JS -->
        <script src="js/main.js"></script>
    </body>
</html>