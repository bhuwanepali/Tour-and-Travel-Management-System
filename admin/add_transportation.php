<?php
    // If save button is clicked ...
    if (isset($_POST['save'])) {
    // image file directory
    $target = "C:/xampp/htdocs/tms/images/".basename($_FILES['Image']['name']);

    //connect to the database
    $con = mysqli_connect("localhost","root","","ttms");
  	$image = $_FILES['Image']['name'];
    $name = $_POST['tname'];
  	$price = $_POST['tprice'];
  	$desc = $_POST['tdesc'];
  	$sits = $_POST['no_of_sits'];

    move_uploaded_file($_FILES['Image']['tmp_name'], $target);
    $sql = "INSERT INTO `transportation`(`tname`, `tphoto`, `tprice`, `no_of_sits`,`tdesc`) VALUES ('$name','$image','$price','$sits','$desc')" or die ("query incorrect");
    $query_run = mysqli_query($con, $sql);

    if ($query_run){
      echo '<script type="text/javascript">alert("data are inserted successfully...")</script>';
      echo "<script>window.location.href='manage_transportation.php'</script>";
      }
    else{
      die("failed to insert ".mysqli_error($con));
      echo "<script>window.location.href='add_transportation.php'</script>";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../images/logo.jpg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <title>Tour and Travel management system</title>
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
                    $sql = "SELECT a_photo FROM admin_details WHERE id=1";
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
            </div>
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
        <div class="customer-list">
            <div class="placee">
                <form name="form" method="post" action="" enctype="multipart/form-data" id="uploadForm">
                    <div class="pro-image">
                        <div class="pimage">
                            <h3>Transportation image</h3>
                        </div>
                        <img src="../images/placeholder.png" alt="" onclick="triggerClick()" id="imagedisplay" style="margin-left:1px;">
                        <input type="file" name="Image" id="file" required onchange="filePreview(this)" style="display: none;">
                    </div>
                    <div class="place-details">
                        <div class="pheader">
                            <h3>Transportation details</h3>
                        </div>
                        <div class="input">
                            <label for="">Name</label><br>
                            <input type="text" name="tname" id="" required class="form-control"><br>   
                            <label for="">Price</label><br>
                            <input type="text" name="tprice" id="" required class="form-control"><br>
                            <label for="">No. of  sits</label><br>
                            <input type="text" name="no_of_sits" id="" required class="form-control"><br>
                            <label for="">Description</label>
                            <textarea name="tdesc" id="mytextarea"></textarea>
                            <input type="submit" name="save" value="Add">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Footer section starts --> 
        <div class="footer">
            <div class="foot">
                <div class="credit">&copy; 2021 - <script>const d = new Date();document.write(d.getFullYear());</script> | Created by ACME Students | all rights reserved!</div>
            </div>
        </div>
        <!-- footer section ends -->
        <script src="js/main.js"></script>
        <script>
            function triggerClick(){
                document.querySelector('#file').click();
            }
            function filePreview(e) {
                if (e.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        document.querySelector('#imagedisplay').setAttribute('src',e.target.result);
                    };
                    reader.readAsDataURL(e.files[0]);
                }
            }
        </script>
        <script src="js/ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('mytextarea'); 
        </script>
    </body>
</html>