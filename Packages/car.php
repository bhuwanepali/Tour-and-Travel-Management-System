<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour and Travel management system</title>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <!-- stylesheet link -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- font awesome cdn file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
<!-- nav-bar starts -->
<div class="togglearea">
    <label for="toggle">
        <span></span>
        <span></span>
        <span></span>
    </label>
</div>
<input type="checkbox" name="" id="toggle">
<div class="nav-bar">
    <img src="images/logo.jpg" alt="">
    <a href="#home"><i class="fas fa-home"></i> Home</a>
    <a href="#packages"><i class="fas fa-map-marker-alt"></i> Packages</a>
    <ul class="header-links pull-right">
		<li><?php include "db.php";
            if(isset($_SESSION["id"])){
                $sql = "SELECT c_photo FROM user_details WHERE c_id='$_SESSION[id]'";
                $query = mysqli_query($con,$sql);
                $row=mysqli_fetch_array($query); ?>
            
            <div class="dropdownn">
                <a href="#" class="dropdownn"><i class="fa fa-user-o"></i><?php echo "<img src='images/".$row['c_photo']."'>";?></a>
                <div class="dropdownn-contentt">
                <a href="userprofile.php" class="modal-open"><i class="fa fa-user-circle"></i>My Profile</a>
			        <a href="editprofile.php" class="modal-open"><i class="fas fa-user-edit"></i>Edit Profile</a>
			        <a href="changepassword.php" class="modal-open"><i class="fas fa-key"></i>Change Password</a>
			        <a href="booking_details.php" class="modal-open"><i class="fas fa-book-reader"></i>My Bookings</a>
                    <a href="ulogout.php" class="modal-open"><i class="fas fa-sign-out-alt"></i>Log out</a>
                </div>
            </div>
            <div class="modal-container" id="userprofile">
                <?php include "userprofile.php"?>
            </div>
            <div class="modal-container" id="edit">
                <?php include "editprofile.php"?>
            </div>
			<?php }else{ ?>
            <div class="dropdownn">
                <a href="#" class="dropdownn"><i class="far fa-user-circle"></i> My Account</a>
                <div class="dropdownn-content">
                    <button class="modal-open" data-modal="login"><i class="fas fa-sign-in-alt"></i> Login</button>
                    <button class="modal-open" data-modal="register"><i class="fas fa-user-plus"></i> Register</button>
                </div>
            </div>
            <div class="modal-container" id="login">
                <?php include "login.php"?>
            </div>
            <div class="modal-container" id="register">
                <?php include "register.php"?>
            </div>
            <?php } ?>
        </li>				
	</ul>
</div>
<!-- nav-bar ends -->
<!-- Bus section starts -->
<section class="bus" id="bus">
    <h1 class="heading">Vehicle Details</h1>
    <div class="bus-container">
        <!-- Individual bus starts -->
        <?php
                $bus = "SELECT * FROM transportation WHERE id = 8";
                $query = mysqli_query($con,$bus);
                $row = mysqli_fetch_array($query); ?>

        <div class="bus_img">
            <div class="image">
                <?php echo "<img src='images/".$row['tphoto']."'>";?>
            </div>
            <div class="content">
                <h3>Vehicle Name: <?php echo $row['tname']; ?> </h3>
                <h4>No. of sits: <?php echo $row['no_of_sits']; ?></h4>
                <h4>Cost: $<?php echo $row['tprice']; ?> / day</h4>
                <span><i class="fas fa-quote-left"></i>  
                    <?php echo $row['tdesc']; ?>
                    <i class="fas fa-quote-right"></i>
                </span>
            </div>
        </div>
    </div>
</section>
<!-- Bus section ends -->
<?php
    include "footer.php";
?>
</body>
</html>