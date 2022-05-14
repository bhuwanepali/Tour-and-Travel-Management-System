<?php
    // If save button is clicked ...
    if (isset($_POST['update'])) {
    // image file directory
    $target = "C:/xampp/htdocs/tms/images/".basename($_FILES['Image']['name']);

    //connect to the database
    $con = mysqli_connect("localhost","root","","ttms");
  	$image = $_FILES['Image']['name'];
    $id = $_POST['place_id'];
    $nam = $_POST['pname'];
  	$desc = $_POST['pdesc'];
  	$cate = $_POST['pcat'];
  	$rate = $_POST['rating'];

    move_uploaded_file($_FILES['Image']['tmp_name'], $target);
    $sql = "UPDATE `place_details` SET `pname`='$nam',`pdesc`='$desc',`pimages`='$image',`province_key`='$cate',`rating`='$rate' WHERE p_id='$id'";
    $query_run = mysqli_query($con, $sql);

    if ($query_run){
      echo '<script type="text/javascript">alert("data are updated successfully...")</script>';
      echo "<script>window.location.href='manage_place.php'</script>";
      }
    else{
      die("failed to insert ".mysqli_error($con));
      echo "<script>window.location.href='edit_place.php'</script>";
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
            <form name="form" method="post" action="" enctype="multipart/form-data" id="uploadForm" class="review-form">
                    <div class="place-details">
                        <div class="pheader">
                            <h3>Update Place Details</h3>
                        </div>
                        <div class="input">
                        <?php
                            include "../db.php";
                            if(isset($_GET['p_id'])){
                                $id = $_GET['p_id'];
                                $sql = "SELECT * FROM `place_details` WHERE p_id = '$id'";
                                $result = mysqli_query($con,$sql);
                                while($data = mysqli_fetch_array($result)){?>

                            <div class="pform">
                                <div class="pname">
                                    <label for="">Place name</label><br>
                                    <input type="text" name="pname" id="" required class="form-control" value="<?php echo $data['pname']?>"><br>   
                                </div>
                                <div class="pname">
                                    <label for="">Province</label><br>
                                    <select name="pcat" id="" class="form-control" style='color:#30637c;'>
                                        <option value="" style='color:#30637c;'>Select Province</option>
                                            <?php
                                            // include "../db.php";
                                                $res = mysqli_query($con,"SELECT * FROM province order by pro_name asc");
                                                while($row = mysqli_fetch_assoc($res)){
                                                    echo "<option value=".$row['id']." style='color:#30637c;' >".$row['pro_name']."</option>";
                                                }
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="pform">
                                <div class="pimage">
                                    <label for="">Place image</label>
                                    <input type="hidden" name="place_id" id="product_id" value="<?php echo $id;?>">
                                    <img src='<?php echo '../images/'.$data['pimages'];?>' onclick="triggerClick()" id="imagedisplay">
                                    <input type="file" name="Image" id="file" onchange="filePreview(this)" style="display: none;">
                                </div>
                            </div>
                            <div class="pdesc">
                                <label for="" style="padding-left:0px;">Description</label>
                                <textarea name="pdesc" id="mytextarea" cols="30" rows="10"><?php echo $data['pdesc']; ?></textarea><br>
                                <div class="pname" style="width:100%">
                                    <label for="">Place Map(url)</label><br>
                                    <input type="text" name="pmap" id="" required class="form-control" value="<?php echo $data['pmap'];?>">
                                </div><br>
                                <div class="input-rating">
								    <span style="font-size:14px;padding-left:0px;">RATING: </span>
								    <div class="stars">
								    	<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
								    	<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
								    	<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
								    	<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
								    	<input id="star1" name="rating" value="1" type="radio" Required><label for="star1"></label>
								    </div>
							</div>
                                <input type="submit" name="update" value="Update">
                            </div>
                            <?php } } ?>
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
        <script src="js/ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('mytextarea',
            {
                extraPlugins : 'colorbutton',
            }); 
	    </script>
        <!-- <script>
            
            // CKEDITOR.replace('mytextarea');
            // var data = CKEDITOR.instances.mytextarea.getData();
        </script> -->

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
    </body>
</html>