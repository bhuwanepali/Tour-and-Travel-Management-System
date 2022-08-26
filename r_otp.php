<?php 
$errors = array();
require "db.php";

//if user click verification code submit button
if(isset($_POST['validate'])){
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM user_details WHERE otp_code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $fetch_code = $fetch_data['otp_code'];
        // $email = $fetch_data['u_email'];
        // $boo_id = $fetch_data['boo_id'];
        $code = 0;
        $status = 'verified';
        // dd($status);
        $update_otp = "UPDATE user_details SET otp_code = $code, u_status = '$status' WHERE otp_code = $fetch_code";
        $update_res = mysqli_query($con, $update_otp);
        if($update_res){
            // $_SESSION['username'] = $name;
            // $_SESSION['c_email'] = $email;
            header("location: index.php");
            exit();
        }else{
            echo "Failed while updating code!";
        }
    }else{
        echo "You've entered incorrect code!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* OTP stylesheet starts */
.ocontainer{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.ocontainer .text-center{
    text-align: center;
    color: #30637c;
}
.ocontainer .form{
    width: 400px;
    background: #fff;
    padding: 30px 35px;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.ocontainer .form form .form-group{
    padding: 15px;
}
.ocontainer .form form .form-control{
    height: 40px;
    width: 300px;
    font-size: 15px;
    color: #30637c;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
}
.ocontainer .form form input[type="submit"]{
    color: #fff;
    padding: 0;
}
.ocontainer .row .alert{
    font-size: 14px;
}
/* OTP stylesheet ends */
    </style>
</head>
<body>
    <div class="ocontainer">
        <div class="row">
            <div class="form">
                <form action="r_otp.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter OTP code" required value="<?php echo $_GET['code'] ?? ''; ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="submit" name="validate" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>