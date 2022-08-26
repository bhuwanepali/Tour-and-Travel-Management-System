<?php
  include "db.php";
  if(isset($_POST['submit'])){
    $email = $_POST['mail'];

    $review = mysqli_query($con,"SELECT `email_id` FROM `reviews` WHERE `email_id` = '$email'");
    if(mysqli_num_rows($review) > 0){
          echo '<script type="text/javascript">alert("You have already reviewed.")</script>';
          echo "<script>window.location.href='index.php'</script>";
          exit();
    }
      $name = $_POST['name'];
      $review = $_POST['review'];
      $rate = $_POST['rating'];
      $date = $_POST['revdate'];
      $sql = "INSERT INTO `reviews`(`name`, `email_id`, `review`, `rating`, `rdate`) VALUES ('$name', '$email', '$review', '$rate', '$date')";
      $query_run = mysqli_query($con,$sql);
      if ($query_run){
          echo '<script type="text/javascript">alert("Your review is uploaded successfully...")</script>';
          echo "<script>window.location.href='index.php'</script>";
          exit();
      }
      else{
        die("failed to upload review ".mysqli_error($con));
      }
  }
?>