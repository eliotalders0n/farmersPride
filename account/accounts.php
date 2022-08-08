<?php
session_start();
include "../db.php";
	$f_name = $_POST["first_name"];
	$l_name = $_POST["last_name"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile"];
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
	// existing email address in our database
	$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 1){
		echo "failed $email";
		exit();
	} else {
		$sql = "UPDATE user_info SET 
                first_name='$f_name',
                last_name='$l_name',
                email='$email',
                mobile='$mobile' 
                WHERE email = '$_SESSION[email]'";
		$run_query = mysqli_query($con,$sql);
        $_SESSION['name'] = $f_name;
        $_SESSION['last_name'] = $l_name;
        $_SESSION['email'] = $email;
        $_SESSION['mobile'] = $mobile;
        header("Location: ../details.php");
        echo "updated $_SESSION[email]";
	  }
?>