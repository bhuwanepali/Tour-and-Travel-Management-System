<?php 
// session_start();
require "db.php";
$email = "";
$name = "";

$errors = array();

//if user click submit button
if(isset($_POST['book'])){
    if(isset($_SESSION['id'])){
        $pid = $_GET['q'];
        $id = $_SESSION['id'];
        $sql = "SELECT c_email, pswd FROM user_details WHERE c_id = $id";
        $run_query = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($run_query);
        $email = $row['c_email'];
        $password = $row['pswd'];

        $package = mysqli_real_escape_string($con, $_POST['package']);
        $place = mysqli_real_escape_string($con, $_POST['location']);
        $member = mysqli_real_escape_string($con, $_POST['member']);
        $arrive = mysqli_real_escape_string($con, $_POST['arrival']);
        $leave = mysqli_real_escape_string($con, $_POST['leaving']);
        $kids = mysqli_real_escape_string($con, $_POST['kids']) ?? '';
        $h_id = mysqli_real_escape_string($con, $_POST['h_id']);
        $h_cost = mysqli_real_escape_string($con, $_POST['room_type']);
        $tot = mysqli_real_escape_string($con, $_POST['total']);
        $vcost = mysqli_real_escape_string($con, $_POST['vehicle']);

        $sqll = "SELECT ptype, pcost FROM packages WHERE pid = $package";
        $run_queryy = mysqli_query($con,$sqll);
        $data = mysqli_fetch_array($run_queryy);
        $ptype = $data['ptype'];
        $pcost = $data['pcost'];

    
        if(count($errors) === 0){
            $code = rand(999999, 111111);
            $status = "notverified";
            $p_status = "incomplete";
            $insert_data = "INSERT INTO `bookings` (`cid`,`blocation`, `arrival_date`, `leaving_date`, `b_cost`, `b_type`, `otp_code`, `b_status`, `payment-status`, `u_email`, `no_of_member`,`kids`,`h_id`,`room_type`,`v_cost`, `total`) 
                            VALUES ('$id','$place','$arrive','$leave','$pcost','$ptype','$code','$status','$p_status','$email', '$member','$kids','$h_id','$h_cost','$vcost', '$tot')" or die ("query incorrect");
           $data_check = mysqli_query($con,$insert_data);
            if($data_check){

                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";    
                $headers .= "From: bhuwan.pariyar@acme.edu.np";
                $subject = "Booking Verification Code";
                $message = "Your verification code is $code. <br> Click <a href='localhost/tms/user-otp.php?code=$code'>here</a> to visit the site";
                // print_r($message);
                if(mail($email, $subject, $message, $headers)){
                    $info = "We've sent a verification code to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['c_email'] = $email;
                    $_SESSION['pswd'] = $password;
                    header("location: user-otp.php");
                    // exit();
                }
                else{
                    echo "Failed while sending code!";
                }
            }else{
                echo "Failed while inserting data into database!";
            }
        }
    }
    else{
        //session ma form ko data rakhne
        //login page open
        //login success
        //check session for booking form data
        //data cha bhane insert into database
        $pid = $_GET['q'];
        echo "
        <script>
            alert('PLease login before booking..!')
            loginModal = document.getElementById('login');
            console.log({loginModal});
            loginModal.style.display = 'block';
        </script>
        ";
        // echo "<script> location.href='index.php'; </script>";
        // exit();
    }
}
//if user click verification code submit button
if(isset($_POST['check'])){
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM bookings WHERE otp_code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $fetch_code = $fetch_data['otp_code'];
        $email = $fetch_data['u_email'];
        $boo_id = $fetch_data['boo_id'];
        $code = 0;
        $status = 'verified';
        // dd($status);
        $update_otp = "UPDATE bookings SET otp_code = $code, b_status = '$status' WHERE otp_code = $fetch_code";
        $update_res = mysqli_query($con, $update_otp);
        if($update_res){
            $_SESSION['username'] = $name;
            $_SESSION['c_email'] = $email;
            header("location: paypal_pay.php?boo_id=$boo_id");
            exit();
        }else{
            echo "Failed while updating code!";
        }
    }else{
        echo "You've entered incorrect code!";
    }
}
?>