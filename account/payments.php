<?php
session_start();
include "../db.php";
	// $user_id = $_POST["user_id"];
	$name = $_POST["name"];
    $exp_date = $_POST["exp_date"];
	$card_number = $_POST["card_number"];
	$cvv = $_POST["cvv"];
	// existing email address in our database
	$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 1){
		echo "failed $email";
		exit();
	} else {
		$sql = "UPDATE payment_details SET 
                user_id='$_SESSION[uid]',
                name='$name',
                card_number='$card_number',
                cvv='$cvv',
                exp_date='$exp_date' 
                WHERE user_id = '$_SESSION[uid]'";
		$run_query = mysqli_query($con,$sql);
        $_SESSION['fullname'] = $name;
        $_SESSION['exp_date'] = $exp_date;
        $_SESSION['card_number'] = $card_number;
        $_SESSION['cvv'] = $cvv;
        header("Location: ../payments.php");
        echo "updated $_SESSION[email]";
	  }
?>