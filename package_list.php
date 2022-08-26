<?php
    session_start();
    include "controluserdata.php";
    include "db.php";
?>
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
    <script src="js/scroll.js"></script>
    <script>
        /* Date */
        function renderTime(){
            var mydate = new Date();
            var year = mydate.getYear();
            if(year < 1000){
                year += 1900
            }
            var day = mydate.getDay();
            var month = mydate.getMonth();
            var daym = mydate.getDate();
            var dayarray = new Array("Sunday","Monday","Tuesday","Wednesday","Thusday","Friday","Saturday");
            var montharray = new Array("January","February","March","April","May","June","July","August","September","October","November","December");

            /* Time */
            var currentTime = new Date();
            var h = currentTime.getHours();
            var m = currentTime.getMinutes();
            var s = currentTime.getSeconds();
            if(h == 24){
                h = 0;
            }else if(h > 12){
                h = h - 0;
            }
            if(h < 10){
                h = "0" + h;
            }
            if(m < 10){
                m = "0" + m;
            }
            if(s < 10){
                s = "0" + s;
            }
            var myClock = document.getElementById("clockDisplay");
            myClock.textContent = "" +dayarray[day]+ " " +daym+ " " +montharray[month]+ " " +year+ " | " +h+ ":" +m+ ":" +s;
            myClock.innerText = "" +dayarray[day]+ " " +daym+ " " +montharray[month]+ " " +year+ " | " +h+ ":" +m+ ":" +s;
            setTimeout("renderTime()", 1000);
        }

        function individual() {
            var x = document.getElementById("individual");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        function group() {
            var x = document.getElementById("group");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        function family() {
            var x = document.getElementById("family");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        function couple() {
            var x = document.getElementById("couple");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        function bus() {
            var x = document.getElementById("bus");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        function car() {
            var x = document.getElementById("car");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        function van() {
            var x = document.getElementById("van");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        function taxi() {
            var x = document.getElementById("taxi");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

    </script>
</head>
<body onload="renderTime();">
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
    <a href="index.php"><i class="fas fa-home"></i> Home</a>
    <a href="#packages"><i class="fas fa-map-marker-alt"></i> Packages</a>
    <ul class="header-links pull-right">
		<li><?php include "db.php";
            if(isset($_SESSION["id"])){
                $id = $_SESSION["id"];
                // echo $id;
                $sql = "SELECT c_photo FROM user_details WHERE c_id='$id'";
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
                <?php include "loginp.php"?>
            </div>
            <div class="modal-container" id="register">
                <?php include "registerp.php"?>
            </div>
            <?php } ?>
        </li>				
	</ul>
</div>
<!-- nav-bar ends -->
<div id="progress">
    <span id="progress-value">&#x1F815;</span>
</div>
<!-- header section starts -->
<header id="home">
	<main>
        <section>
		    <h1><i class="fas fa-praying-hands" style="color: #30637c;"></i> Welcome to Nepal <i class="fas fa-praying-hands" style="color: #30637c;"></i></h1>
		    <h1>come to visit  <span class="change_content"></span></h1>
        </section>
        <div class="slogan">
            <i class="fas fa-quote-left"></i>
            dicover new places with us, adventure awaits.
            Find yourself and explore more.  <i class="fas fa-quote-right"></i>
        </div>
        <div id="clockDisplay" class="clock" style="color:#30637c;"></div>
        <div class="icons">
            <a href="https://www.facebook.com/profile.php?id=100084376884162" id="facebook" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/ttmsagency" id="twitter" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/ttmsagency/" id="instagram" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/ttmsagency/" id="linkedin" class="fab fa-linkedin"></a>
        </div>
    </main>
</header>
<!-- Package section Ends -->
<section class="package" id="packages">
    <h1 class="heading">Tour and Travel Package lists</h1>
    <div class="package-container">
        <!-- Individual package starts -->
        <?php
            $pid = $_GET['q'];
            $package = "SELECT place_details.pimages as images, place_details.pname as place, packages.ptype as typ, packages.pcost as cost, packages.pdesc as descr,packages.pid as id FROM `place_details`, `packages` WHERE `place_details`.`p_id`='$pid'";
            // echo $package;
            $query = mysqli_query($con,$package);
            $data = mysqli_fetch_array($query); ?>
            

        <div class="box">
                <div class="image">
                    <?php echo "<img src='images/".$data['images']."'>";?>
                </div>
                <div class="content">
                    <h3>location: <?php echo $data['place']; ?> </h3>
                    <label>Packages:</label>
                    <a onclick="individual()" class="individuall"><i class="fas fa-user"></i>&nbsp;Individual</a>
                    <div class="individual" id="individual" style="display: none;">
                        <label for="">COST: $25 Per day</label>
                        <h4>Services</h4>
                        <li><i class="fas fa-luggage-cart"></i>&nbsp;Travel Management</li>
                        <li><i class="fas fa-hands-helping"></i>&nbsp;Passenger Assistance</li>
                        <li><i class="fas fa-pen-square"></i>&nbsp;Consulting</li>
                        <li><i class="fas fa-broadcast-tower"></i>&nbsp;Marketing and Internal Communication</li>
                        <li><i class="fas fa-cog"></i>&nbsp;Technology</li>
                        <li><i class="fab fa-usps"></i>&nbsp;Leisure Services</li>
                    </div>

                    <a onclick="group()" class="groupp"><i class="fas fa-users"></i>&nbsp;Group</a>
                    <div class="individual" id="group" style="display: none;">
                        <label for="">COST: $20 Per day</label>
                        <h4>Services</h4>
                        <li><i class="fas fa-luggage-cart"></i>&nbsp;Travel Management</li>
                        <li><i class="fas fa-hands-helping"></i>&nbsp;Passenger Assistance</li>
                        <li><i class="fas fa-pen-square"></i>&nbsp;Consulting</li>
                        <li><i class="fas fa-broadcast-tower"></i>&nbsp;Marketing and Internal Communication</li>
                        <li><i class="fas fa-cog"></i>&nbsp;Technology</li>
                        <li><i class="fab fa-usps"></i>&nbsp;Leisure Services</li>
                    </div>

                    <a onclick="family()" class="familyy"><i class="fas fa-users-cog"></i>&nbsp;Family</a>
                    <div class="individual" id="family" style="display: none;">
                        <label for="">COST: $20 Per day</label>
                        <h4>Services</h4>
                        <li><i class="fas fa-luggage-cart"></i>&nbsp;Travel Management</li>
                        <li><i class="fas fa-hands-helping"></i>&nbsp;Passenger Assistance</li>
                        <li><i class="fas fa-pen-square"></i>&nbsp;Consulting</li>
                        <li><i class="fas fa-broadcast-tower"></i>&nbsp;Marketing and Internal Communication</li>
                        <li><i class="fas fa-cog"></i>&nbsp;Technology</li>
                        <li><i class="fab fa-usps"></i>&nbsp;Leisure Services</li>
                    </div>

                    <a onclick="couple()" class="couplee" id=""><i class="fas fa-user-friends"></i>&nbsp;Couple</a>
                    <div class="individual" id="couple" style="display: none;">
                        <label for="">COST: $25 Per day</label>
                        <h4>Services</h4>
                        <li><i class="fas fa-luggage-cart"></i>&nbsp;Travel Management</li>
                        <li><i class="fas fa-hands-helping"></i>&nbsp;Passenger Assistance</li>
                        <li><i class="fas fa-pen-square"></i>&nbsp;Consulting</li>
                        <li><i class="fas fa-broadcast-tower"></i>&nbsp;Marketing and Internal Communication</li>
                        <li><i class="fas fa-cog"></i>&nbsp;Technology</li>
                        <li><i class="fab fa-usps"></i>&nbsp;Leisure Services</li>
                    </div>
                </div>
        </div>
        <div class="transport">
            <div class="trans-port">
                <a onclick="bus()" style="font-size:30px;color:#30637c;" class="bus"><i class="fas fa-bus"></i></a>
                <a onclick="car()" style="font-size:30px;color:#30637c;" class="car"><i class="fas fa-car"></i></a>
                <a onclick="van()" style="font-size:30px;color:#30637c;" class="van"><i class="fas fa-shuttle-van"></i></a>
                <a onclick="taxi()" style="font-size:30px;color:#30637c;" class="taxi"><i class="fas fa-taxi"></i></a>
            </div>
            <div class="bussi" id="bus" style="display:none;">
                <h1 class="heading">Bus Details</h1>
                <div class="bus-container">
                <?php
                        $bus = "SELECT * FROM transportation WHERE id = 1";
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
                            <!-- <span> -->
                                <div class="transport" style="padding:10px;background-color:#ddd;">
                                    <b>SERVICES:</b><hr>
                                    <ul style="list-style:none;padding:10px;">
                                        <li style="padding:5px;">
                                            🍝 Snacks
                                        </li>
                                        <li style="padding:5px;">
                                            🌐 Wi-Fi
                                        </li>
                                        <li style="padding:5px;">
                                            🥛 Drinking Water
                                        </li>
                                        <li style="padding:5px;">
                                            🎵 Audio
                                        </li>
                                        <li style="padding:5px;">
                                            ▶ Video
                                        </li>
                                    </ul>
                                </div>
                            <!-- </span> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="bussg" id="car" style="display:none;">
                <h1 class="heading">Car Details</h1>
                <div class="bus-container">
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
                            <!-- <span> -->
                            <div class="transport" style="padding:10px;background-color:#ddd;">
                                    <b>SERVICES:</b><hr>
                                    <ul style="list-style:none;padding:10px;">
                                        <li style="padding:5px;">
                                            🍝 Snacks
                                        </li>
                                        <li style="padding:5px;">
                                            🌐 Wi-Fi
                                        </li>
                                        <li style="padding:5px;">
                                            🥛 Drinking Water
                                        </li>
                                        <li style="padding:5px;">
                                            🎵 Audio
                                        </li>
                                        <li style="padding:5px;">
                                            ▶ Video
                                        </li>
                                    </ul>
                                </div>
                            <!-- </span> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="bussf" id="taxi" style="display:none;">
                <h1 class="heading">Taxi Details</h1>
                <div class="bus-container">
                <?php
                    $bus = "SELECT * FROM transportation WHERE id = 7";
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
                            <!-- <span> -->
                            <div class="transport" style="padding:10px;background-color:#ddd;">
                                    <b>SERVICES:</b><hr>
                                    <ul style="list-style:none;padding:10px;">
                                        <li style="padding:5px;">
                                            🍝 Snacks
                                        </li>
                                        <li style="padding:5px;">
                                            🌐 Wi-Fi
                                        </li>
                                        <li style="padding:5px;">
                                            🥛 Drinking Water
                                        </li>
                                        <li style="padding:5px;">
                                            🎵 Audio
                                        </li>
                                        <li style="padding:5px;">
                                            ▶ Video
                                        </li>
                                    </ul>
                                </div>
                            <!-- </span> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="bussc" id="van" style="display:none;">
                <h1 class="heading">Van Details</h1>
                <div class="bus-container">
                <?php
                    $bus = "SELECT * FROM transportation WHERE id = 3";
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
                            <!-- <span> -->
                            <div class="transport" style="padding:10px;background-color:#ddd;">
                                    <b>SERVICES:</b><hr>
                                    <ul style="list-style:none;padding:10px;">
                                        <li style="padding:5px;">
                                            🍝 Snacks
                                        </li>
                                        <li style="padding:5px;">
                                            🌐 Wi-Fi
                                        </li>
                                        <li style="padding:5px;">
                                            🥛 Drinking Water
                                        </li>
                                        <li style="padding:5px;">
                                            🎵 Audio
                                        </li>
                                        <li style="padding:5px;">
                                            ▶ Video
                                        </li>
                                    </ul>
                                </div>
                            <!-- </span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        <h1 class="heading">Available Hotels</h1>
        <div class="hotels">
            <a href="hotel/room.php?q=<?php echo $pid;?>" style="font-size:14px;text-align:center;color:#30637c;"><img src="hotel/assets/hotel_pics/Dwarika_hotel.jpg" alt="">Dwarika Hotel</a>
            <a href="hotel/room.php?q=<?php echo $pid;?>" style="font-size:14px;text-align:center;color:#30637c;"><img src="hotel/assets/hotel_pics/Grand_hotel.jpg" alt="">Grand Hotel</a>
            <a href="hotel/room.php?q=<?php echo $pid;?>" style="font-size:14px;text-align:center;color:#30637c;"><img src="hotel/assets/hotel_pics/Radisson_hotel.jpg" alt="">Radisson Hotel</a>
        </div>
        <div class="details">
            <a class="modal-ind">Book</a>
        </div>
        <div class="modal-bg">
            <div class="modal">
                <div class="roww">
                    <span class="modal-close" ><i class="far fa-window-close" style="color:#30637c;"></i></span>
                    <h2>FIll up the form for booking</h2>
                    <form action="package_list.php" method="post">
                        <div class="form-group">
                            <label for="">Location</label><br>
                            <input type="text" name="location" value="<?php echo $data['place']; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="">Packages</label><br>
                            <select name="package" id="package" class="form-control price_inputs" style='color:#30637c;'>
                                <option value="" style='color:#30637c;'>-- Select --</option>
                                    <?php
                                    include "db.php";
                                        $res = mysqli_query($con,"SELECT * FROM packages order by ptype asc");
                                        while($package = mysqli_fetch_assoc($res)){
                                            echo "<option value=".$package['pid']." data-price=".$package['pcost']."  style='color:#30637c;' >".$package['ptype'].' ( $'.$package['pcost'].'/ day)'."</option>";
                                        }
                                    ?>
                            </select>
                        </div>
                        <div class="form-group" id="member">
                            <label for="">Number of Adults</label><br>
                            <input type="number" class="numberr price_inputs" name="member" id="num0" placeholder="No of Adults" value="" required>
                        </div>
                        <div class="form-group" id="kids" style="display:none;">
                            <label for="">Number of kids</label><br>
                            <input type="number" class="numberr price_inputs" name="kids" id="" placeholder="No of Kids" value="">
                        </div>
                        <!-- <div class="form-group" id="adults">
                            <label for="">Number of adults</label><br>
                            <input type="number" class="numberr price_inputs" name="adults" id="num0" placeholder="No of Adults" value="" required>
                        </div> -->
                        <!-- <div class="form-group" id="parents">
                            <label for="">Number of parents</label><br>
                            <input type="number" class="numberr" name="parents" id="" placeholder="No of member" value="" required>
                        </div> -->
                        <div class="form-group">
                            <label for="">Vehicle</label><br>
                            <select name="vehicle" id="ivehicle" class="form-control price_inputs" style='color:#30637c;'>
                                <option value="" style='color:#30637c;'>-- Select --</option>
                                    <?php
                                    include "db.php";
                                        $res = mysqli_query($con,"SELECT * FROM transportation order by tname asc");
                                        while($transport = mysqli_fetch_assoc($res)){
                                            echo "<option value=".$transport['tprice']." style='color:#30637c;' >".$transport['tname'].' ( $'.$transport['tprice'].'/ day)'."</option>";
                                        }
                                    ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""><input type="checkbox" name="hotel" id="hotel" onclick="hoTel()"> Is Hotel necessary?</label>
                            <select name="h_id" id="ho_tel" class="form-control" style="display:none;color:#30637c;">
                                <option value="" style='color:#30637c;'>-- Select --</option>
                                    <?php
                                    include "db.php";
                                        $res = mysqli_query($con,"SELECT * FROM hotel order by h_name asc");
                                        while($hotel = mysqli_fetch_assoc($res)){
                                            echo "<option value=".$hotel['id']." style='color:#30637c;' >".$hotel['h_name']."</option>";
                                        }
                                    ?>
                            </select>
                        </div>
                        <div class="form-group" id="hot_el" style="display:none;">
                            <label for="">Room</label><br>
                            <select name="room_type" id="iroom_type" class="form-control price_inputs" style="color:#30637c;">
                                <option value="" style='color:#30637c;'>-- Select --</option>
                                    <?php
                                    include "db.php";
                                        $res = mysqli_query($con,"SELECT * FROM rooms where h_id = 1 order by room_type asc");
                                        while($room = mysqli_fetch_assoc($res)){
                                            echo "<option value=".$room['id']." data-price=".$room['price']." style='color:#30637c;' >".$room['room_type'].' ( $'.$room['price'].'/ day)'."</option>";
                                        }
                                    ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Arrival</label><br>
                            <input type="date" name="arrival" class='price_inputs' id="date" required>
                        </div>
                        <div class="form-group">
                            <label for="">Leaving</label><br>
                            <input type="date" name="leaving" id="dat" class='price_inputs' required>
                        </div>
                        <div class="form-group">
                            <label for="">Total Amount</label><br>
                            <input type="text" name="total" id="itotal" readonly="readonly">
                        </div>
                        <div class="form-group" style="margin-top:30px;">
                            <input type="submit" value="Ready to checkout" name="book" style="margin:0; padding:0;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Individual package ends -->
    </div>
</section>
<!-- Package section ends -->
<?php 
include "controluserdata.php";
include "footer.php"; ?>
<!-- footer section ends -->
<script src="js/scripts.js"></script>

<script>
    var modalBtns = document.querySelectorAll(".modal-open");
    modalBtns.forEach(function(btn){
        btn.onclick = function(){
            var modal = btn.getAttribute("data-modal")
            document.getElementById(modal).style.display = "block";
        };
    });

//getting close modal
    var closeBtns = document.querySelectorAll(".close");
    closeBtns.forEach(function(btn){
        btn.onclick = function(){
            var modal = (btn.closest(".modal-container").style.display = "none");
        };
    });

//login and register form link
    var closeBtns = document.querySelectorAll(".modal-openn");
    closeBtns.forEach(function(btn){
        btn.onclick = function(){
            var model = (btn.closest(".modal-container").style.display = "none");
            var modal = btn.getAttribute("data-modal")
            document.getElementById(modal).style.display = "block";
        };
    });

// When the user clicks anywhere outside of the modal, close it
    var log = document.getElementById('login');
    window.onclick = function(event) {
        if (event.target == log) {
            log.style.display = "none";
        }
    }
    var reg = document.getElementById('register');
    window.onclick = function(event) {
        if (event.target == reg) {
            reg.style.display = "none";
        }
    }

    //booking form modal for individual
    var modalbtn = document.querySelector(".modal-ind");
    var modalbg = document.querySelector(".modal-bg");
    var modalclose = document.querySelector(".modal-close");

    modalbtn.addEventListener("click",function(){
        modalbg.classList.add("bg-active");
    });
    modalclose.addEventListener("click",function(){
        modalbg.classList.remove("bg-active");
    });

        // to avoid previous date selection
        var todayDate = new Date();
        var month = todayDate.getMonth() + 1; 
        var year = todayDate.getUTCFullYear(); 
        var tdate = todayDate.getDate(); 
        if(month < 10){
        month = "0" + month 
        }
        if(tdate < 10){
        tdate = "0" + tdate;
        }
        var minDate = year + "-" + month + "-" + tdate;
        document.getElementById("date").setAttribute("min", minDate);
        document.getElementById("dat").setAttribute("min", minDate);

        // if user click on checkbox for hotel reservation
        function hoTel() {
            var x = document.getElementById("hotel");
            var h1 = document.getElementById("ho_tel");
            var h2 = document.getElementById("hot_el");
            if (x.checked == true){
                h1.style.display = "block";
                h2.style.display = "block";
            } else {
                h1.style.display = "none";
                h2.style.display = "none";
            }
        }

        // if customer select family package then
        window.onload = function() {
        var input1 = document.getElementById('kids');
        // var input2 = document.getElementById('adults');
        var member = document.getElementById('member');
        
        // input1.style.display = 'none';
        // input2.style.display = 'none';
        member.style.display = 'block';
        var packages = document.getElementById('package');
        packages.onchange = function () {
            if (packages.options[packages.selectedIndex].value == 3) {
                input1.style.display = 'block';
                // input2.style.display = 'block';
                member.style.display = 'block';
            } else {
                input1.style.display = 'none';
                // input2.style.display = 'none';
                member.style.display = 'block';
            }
        }

        }

        // auto update the cost of family package with respect to  number of members and days
        function Total(){
            var package = document.getElementById('package');
            var packageId = package.value;
            var packageCost = 0;
            if (packageId) {
                packageCost = package.selectedOptions[0].dataset.price;
            }

            var memberCount = parseInt(document.getElementById('num0').value);
            // console.log({memberCount});
            if (isNaN(memberCount)) {
                memberCount = 0;
            }
            var vehicleCost = document.getElementById('ivehicle').value;
            if(!vehicleCost){
                vehicleCost = 0;
            }
            
            var roomNecessary = document.getElementById('hotel').checked;
            var room = document.getElementById('iroom_type');
            var roomId = room.value;
            var roomCost = 0;
            if (roomId) {
                roomCost = room.selectedOptions[0].dataset.price;
            }
            if(!roomNecessary){
                roomCost = 0;
            }
            var arrival = document.getElementById('date').value;
            var arrivalDate = new Date(arrival);

            var leaving = document.getElementById('dat').value;
            var leavingDate = new Date(leaving);

            var diff = leavingDate.getTime() - arrivalDate.getTime();
            var msInDayy = 1000 * 3600 * 24;
            var resultt = (diff/msInDayy) + 1; 

            var tott = (packageCost * memberCount * resultt) + (roomCost * resultt) + (vehicleCost * resultt);
            if (isNaN(tott)) {
                tott = 0;
            }
            document.getElementById('itotal').value = tott;
        }

        var priceInputs = document.getElementsByClassName('price_inputs');
        for (let i = 0; i < priceInputs.length; i++) {
            priceInputs[i].addEventListener('change',function(e){
                Total();
            });
            priceInputs[i].addEventListener('input',function(){
                Total();
            });
        }

        var isHotel = document.getElementById('hotel');
        isHotel.addEventListener('click',function(){
                Total();
        });

</script>   
</body>
</html>