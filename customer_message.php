<?php
    //if user click submit button
    if(isset($_POST['contact'])){
        $subject = mysqli_real_escape_string($con, $_POST['cname']);
        $email = mysqli_real_escape_string($con, $_POST['cemail']);
        $message = mysqli_real_escape_string($con, $_POST['message']);
        $sender = "From: bhuwanpariyarr@gmail.com";
        if(mail($email, $subject, $message, $sender)){
            header("location: index.php");
            exit();
        }
        else{
            echo "Failed while sending message!";
        }
    }
?>