<?php
    session_start();
    include "db.php";
    if(isset($_GET['del'])){
        $id=$_GET['del'];
        mysqli_query($con,"DELETE FROM bookings WHERE boo_id = '$id'");

        echo "<script> location.href='booking_details.php'; </script>";
        exit();
    }
    
    if(isset($_GET['boo_id'])){
        $id = $_GET['boo_id'];
        $cancel = 'Cancelled';
        mysqli_query($con,"UPDATE `bookings` SET `b_status`='$cancel' WHERE boo_id = '$id'");

        echo "<script> location.href='booking_details.php'; </script>";
        exit();
    }
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
</head>
<body>
<div class="body">
<!-- <div class="body" style="width:100%;height:100vh;background-image:url('images/bgg.jpg');"> -->
    <div class="book_container">
        <div class="close">
            <span class="close-modal">
                <a href="index.php"><i class="far fa-window-close"></i></a>
            </span>
        </div>
        <div class="box-container">
        <h3 style="color:#30637c;text-transform:uppercase;font-size:14px;padding:10px 0 0 10px;">Booking list</h3>
            <div class="content-table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Location</th>
                            <th>Member</th>
                            <th>Arrival</th>
                            <th>Leaving</th>
                            <th>Package type</th>
                            <th>Booking status</th>
                            <th>Payment status</th>
                            <th>vehicle cost</th>
                            <th>Tour & Travel cost</th>
                            <!-- <th>No. of Days</th> -->
                            <th>Total price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                        include "db.php";
                        $cid = $_SESSION["id"];
                        $bsql = "SELECT * FROM `bookings` WHERE cid=$cid";
                        $bresult = mysqli_query($con,$bsql);
                        if(mysqli_num_rows($bresult) > 0){
                            while($bdata = mysqli_fetch_array($bresult)){?>                            
                    <tbody>
                        <tr>
                            <td><?php echo $bdata['boo_id']; ?></td>
                            <td><?php echo $bdata['blocation']; ?></td>
                            <td><?php echo $bdata['no_of_member']; ?></td>
                            <td><?php echo $bdata['arrival_date']; ?></td>
                            <td><?php echo $bdata['leaving_date']; ?></td>
                            <td><?php echo $bdata['b_type']; ?></td>
                            <td><?php echo $bdata['b_status']; ?></td>
                            <td><?php echo $bdata['payment-status']; ?></td>
                            <td><?php echo '$'.$bdata['v_cost']; ?></td>
                            <td><?php echo '$'.$bdata['b_cost']; ?></td>
                            <td><?php echo '$'.$bdata['total']; ?></td>
                            <td>
                                <a href="booking_details.php?del=<?php echo $bdata["boo_id"];?>" onclick="return confirm('Are you sure?');"><i class="fas fa-times-circle"></i></a>
                                <a href="booking_details.php?boo_id=<?php echo $bdata['boo_id'];?>" onclick="return confirm('Are you sure?Do you want to cancel the booking?');"><i class="fas fa-ban"></i></a>
                                <a href="admin/invoice.php?boo_id=<?php echo $bdata["boo_id"];?>"><i class="fas fa-money-check-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
<!-- </div> -->
</body>
</html>