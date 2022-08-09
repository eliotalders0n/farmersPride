<?php
session_start();
include "../db.php";
	// $user_id = $_POST["user_id"];
	$Network = $_POST["Network"];
    $Mobile = $_POST["mobile"];
	$card_number = $_POST["card_number"];
	$cvv = $_POST["cvv"];
	// existing email address in our database
	$sql = "SELECT user_id FROM user_info WHERE user_id = '$_SESSION[uid]' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 1){
		echo "failed $email";
		exit();
	} else {
		$sql = "UPDATE payment_details SET 
                Network='$Network',
                Mobile='$Mobile'
                WHERE user_id = 21";
		$run_query = mysqli_query($con,$sql);
        $_SESSION['Network'] = $Network;
        $_SESSION['mobile'] = $Mobile;
        header("Location: ../payments.php");
        echo "updated $_SESSION[email]";
	  }
?>