<?php
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
        var input2 = document.getElementById('adults');
        var input3 = document.getElementById('parents');
        var member = document.getElementById('member');
        
        input1.style.display = 'none';
        input2.style.display = 'none';
        input3.style.display = 'none';
        member.style.display = 'block';
        var packages = document.getElementById('package');
        packages.onchange = function () {
            if (packages.options[packages.selectedIndex].value == 3) {
                input1.style.display = 'block';
                input2.style.display = 'block';
                input3.style.display = 'block';
                member.style.display = 'none';
            } else {
                input1.style.display = 'none';
                input2.style.display = 'none';
                input3.style.display = 'none';
                member.style.display = 'block';
            }
        }

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
            <a href="#" id="facebook" class="fab fa-facebook-f"></a>
            <a href="#" id="twitter" class="fab fa-twitter"></a>
            <a href="#" id="instagram" class="fab fa-instagram"></a>
            <a href="#" id="linkedin" class="fab fa-linkedin"></a>
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
            // $idl = $_GET['pid'];
            $package = "SELECT place_details.pimages as images, place_details.pname as place, packages.ptype as typ, packages.pcost as cost, packages.pdesc as descr,packages.pid as id FROM place_details, packages WHERE place_details.p_id=$pid";
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
                            <span>
                                <?php echo $row['tdesc']; ?>
                            </span>
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
                            <span>
                                <?php echo $row['tdesc']; ?>
                            </span>
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
                            <span>
                                <?php echo $row['tdesc']; ?>
                            </span>
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
                            <span>
                                <?php echo $row['tdesc']; ?>
                            </span>
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
            <a class="modal-ind" id="modal-ind">Book</a>
        </div>
        <div class="modal-bg" id="modal-bg" style="display:none;">
            <div class="modal">
                <div class="row">
                    <span class="modal-close" ><i class="far fa-window-close" style="color:#30637c;"></i></span>
                    <h2>FIll up the form for booking</h2>
                    <form action="" method="post">
                    <input type="hidden" name="type" value=""/>
                    <input type="hidden" name="qty" id="cost0" value=""/>
                    <div class="form-group">
                        <label for="">Location</label><br>
                        <input type="text" name="location" value="<?php echo $data['place']; ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="">Packages</label><br>
                        <select name="package" id="package" class="form-control" style='color:#30637c;'>
                            <option value="" style='color:#30637c;'>Choose Packages</option>
                                <?php
                                include "../db.php";
                                    $res = mysqli_query($con,"SELECT * FROM packages order by ptype asc");
                                    while($row = mysqli_fetch_assoc($res)){
                                        echo "<option value=".$row['pid']." style='color:#30637c;' >".$row['ptype'].' ( $'.$row['pcost'].'/ day)'."</option>";
                                    }
                                ?>
                        </select>
                    </div>
                    <div class="form-group" id="member">
                        <label for="">Number of member</label><br>
                        <input type="number" class="numberr" name="num" id="num0" placeholder="No of member" value="" required>
                    </div>
                    <div class="form-group" id="kids">
                        <label for="">Number of kids</label><br>
                        <input type="number" class="numberr" name="kids" id="kids" placeholder="No of member" value="" required>
                    </div>
                    <div class="form-group" id="adults">
                        <label for="">Number of adults</label><br>
                        <input type="number" class="numberr" name="adults" id="adults" placeholder="No of member" value="" required>
                    </div>
                    <div class="form-group" id="parents">
                        <label for="">Number of parents</label><br>
                        <input type="number" class="numberr" name="parents" id="parents" placeholder="No of member" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Vehicle</label><br>
                        <select name="vehicle" id="ivehicle" class="form-control" style='color:#30637c;'>
                            <option value="" style='color:#30637c;'>Choose Vehicle</option>
                                <?php
                                include "../db.php";
                                    $res = mysqli_query($con,"SELECT * FROM transportation order by tname asc");
                                    while($row = mysqli_fetch_assoc($res)){
                                        echo "<option value=".$row['tprice']." style='color:#30637c;' >".$row['tname'].' ( $'.$row['tprice'].'/ day)'."</option>";
                                    }
                                ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""><input type="checkbox" name="hotel" id="hotel" onclick="hoTel()"> Is Hotel necessary?</label>
                        <select name="vehicle" id="ho_tel" class="form-control" style="display:none;color:#30637c;">
                            <option value="" style='color:#30637c;'>Choose Hotel</option>
                                <?php
                                include "../db.php";
                                    $res = mysqli_query($con,"SELECT * FROM hotel order by rname asc");
                                    while($row = mysqli_fetch_assoc($res)){
                                        echo "<option value=".$row['id']." style='color:#30637c;' >".$row['rname']."</option>";
                                    }
                                ?>
                        </select>
                    </div>
                    <div class="form-group" id="hot_el" style="display:none;">
                        <label for="">Room</label><br>
                        <select name="room_type" id="iroom_type" class="form-control" style="color:#30637c;">
                            <option value="" style='color:#30637c;'>Choose room</option>
                                <?php
                                include "../db.php";
                                    $res = mysqli_query($con,"SELECT * FROM rooms where h_id = 1 order by room_type asc");
                                    while($row = mysqli_fetch_assoc($res)){
                                        echo "<option value=".$row['id']." style='color:#30637c;' >".$row['room_type'].' ( $'.$row['price'].'/ day)'."</option>";
                                    }
                                ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Arrival</label><br>
                        <input type="date" name="arrival" id="date" required>
                    </div>
                    <div class="form-group">
                        <label for="">Leaving</label><br>
                        <input type="date" name="leaving" id="dat" required>
                    </div>
                    <div class="form-group">
                        <label for="">Total Amount</label><br>
                        <input type="text" name="total" id="itotal" readonly="readonly">
                    </div>
                    <div class="form-group">
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
<?php include ("footer.php"); ?>
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

    booking form modal for individual
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
        document.getElementById("datee").setAttribute("min", minDate);
        document.getElementById("dateee").setAttribute("min", minDate);
        document.getElementById("dateeee").setAttribute("min", minDate);
        document.getElementById("dat").setAttribute("min", minDate);
        document.getElementById("datt").setAttribute("min", minDate);
        document.getElementById("dattt").setAttribute("min", minDate);
        document.getElementById("datttt").setAttribute("min", minDate);

        // // booking form open
        // var modal = document.getElementById("modal-bg");

        // // Get the button that opens the modal
        // var btn = document.getElementById("modal-ind");

        // // Get the <span> element that closes the modal
        // var span = document.getElementsByClassName("modal-close")[0];

        // // When the user clicks the button, open the modal 
        // btn.onclick = function() {
        // modal.style.display = "block";
        // }

        // // When the user clicks on <span> (x), close the modal
        // span.onclick = function() {
        // modal.style.display = "none";
        // }

        // // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function(event) {
        // if (event.target == modal) {
        //     modal.style.display = "none";
        // }
        // }
    // // booking form modal for Group
    // var modalbtnn = document.querySelector(".modal-group");
    // var modalbgg = document.querySelector(".modal-gp");
    // var modalclosee = document.querySelector(".modal-closee");

    // modalbtnn.addEventListener("click",function(){
    //     modalbgg.classList.add("bg-active");
    // });
    // modalclosee.addEventListener("click",function(){
    //     modalbgg.classList.remove("bg-active");
    // });

    // // booking form modal for family
    // var modalbtnnn = document.querySelector(".modal-family");
    // var modalbggg = document.querySelector(".modal-fam");
    // var modalcloseee = document.querySelector(".modal-closeee");

    // modalbtnnn.addEventListener("click",function(){
    //     modalbggg.classList.add("bg-active");
    // });
    // modalcloseee.addEventListener("click",function(){
    //     modalbggg.classList.remove("bg-active");
    // });

    // // booking form modal for couple
    // var modalbtnnnn = document.querySelector(".modal-couple");
    // var modalbgggg = document.querySelector(".modal-cou");
    // var modalcloseeee = document.querySelector(".modal-closeeee");

    // modalbtnnnn.addEventListener("click",function(){
    //     modalbgggg.classList.add("bg-active");
    // });
    // modalcloseeee.addEventListener("click",function(){
    //     modalbgggg.classList.remove("bg-active");
    // });

    // Bus details modal
    // var modalbusi = document.querySelector(".bus");
    // var modalbussi = document.querySelector(".bussi");
    // var busclosei = document.querySelector(".bus_closei");

    // modalbusi.addEventListener("click",function(){
    //     modalbussi.classList.add("bg-active");
    // });
    // busclosei.addEventListener("click",function(){
    //     modalbussi.classList.remove("bg-active");
    // });

    // // Car details modal
    // var modalbusf = document.querySelector(".car");
    // var modalbussf = document.querySelector(".bussf");
    // var busclosef = document.querySelector(".bus_closef");

    // modalbusf.addEventListener("click",function(){
    //     modalbussf.classList.add("bg-active");
    // });
    // busclosef.addEventListener("click",function(){
    //     modalbussf.classList.remove("bg-active");
    // });

    // // Taxi details modal
    // var modalbusg = document.querySelector(".taxi");
    // var modalbussg = document.querySelector(".bussg");
    // var buscloseg = document.querySelector(".bus_closeg");

    // modalbusg.addEventListener("click",function(){
    //     modalbussg.classList.add("bg-active");
    // });
    // buscloseg.addEventListener("click",function(){
    //     modalbussg.classList.remove("bg-active");
    // });

    // // Van details modal
    // var modalbusc = document.querySelector(".van");
    // var modalbussc = document.querySelector(".bussc");
    // var busclosec = document.querySelector(".bus_closec");

    // modalbusc.addEventListener("click",function(){
    //     modalbussc.classList.add("bg-active");
    // });
    // busclosec.addEventListener("click",function(){
    //     modalbussc.classList.remove("bg-active");
    // });

    // auto update the cost of individual package with respect to  number of days         
    // function iTotal(){
    //     var amt0 = document.getElementById('cost0').value;
    //     var a = document.getElementById('date').value;
    //     var date0 = new Date(a);
        
    //     var b = document.getElementById('dat').value;
    //     var date00 = new Date(b);
        
    //     var c = document.getElementById('ivehicle').value;

    //     var di = date00.getTime() - date0.getTime();
    //     var msInDay0 = 1000 * 3600 * 24;
    //     var result0 = (di/msInDay0) + 1;
    //     var tot0 = (amt0 * result0) + (c * result0);
    //     document.getElementById('itotal').value = tot0;
    // }
    // // auto update the cost of group package with respect to  number of members and days        
    // function findTotal(){
    //     var amt = document.getElementById('cost1').value;
    //     var scale = document.getElementById('num1').value;
    //     var x = document.getElementById('datee').value;
    //     var date1 = new Date(x);

    //     var y = document.getElementById('datt').value;
    //     var date2 = new Date(y);

    //     var z = document.getElementById('gvehicle').value;

    //     var dif = date2.getTime() - date1.getTime();
    //     var msInDay = 1000 * 3600 * 24;
    //     var result = (dif/msInDay) + 1;        
    //     var tot = (amt * scale * result) + (z * result);
    //     document.getElementById('total').value = tot;
    // }

    // // auto update the cost of family package with respect to  number of members and days
    // function Total(){
    //     var amtt = document.getElementById('cost2').value;
    //     var scalee = document.getElementById('num2').value;
    //     var m = document.getElementById('dateee').value;
    //     var date3 = new Date(m);

    //     var n = document.getElementById('dattt').value;
    //     var date4 = new Date(n);

    //     var o = document.getElementById('fvehicle').value;

    //     var diff = date4.getTime() - date3.getTime();
    //     var msInDayy = 1000 * 3600 * 24;
    //     var resultt = (diff/msInDayy) + 1;        

    //     var tott = (scalee * amtt * resultt) + (resultt * o);
    //     document.getElementById('dollor').value = tott;
    // }

    // // auto update the cost of couple package with respect to  number of members and days        
    // function cTotal(){
    //     var amt4 = document.getElementById('cost4').value;
    //     var scale4 = document.getElementById('num4').value;
    //     var p = document.getElementById('dateeee').value;
    //     var date5 = new Date(p);

    //     var q = document.getElementById('datttt').value;
    //     var date6 = new Date(q);

    //     var r = document.getElementById('cvehicle').value;

    //     var dif4 = date6.getTime() - date5.getTime();
    //     var msInDay4 = 1000 * 3600 * 24;
    //     var result4 = (dif4/msInDay4) + 1;        
    //     var tot4 = (amt4 * scale4 * result4) + (result4 * r);
    //     document.getElementById('ctotal').value = tot4;
    // }
</script>   
</body>
</html>