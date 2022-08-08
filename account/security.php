<?php
session_start();
include "../db.php";
    $init_password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $password;
    if($init_password == $repassword){
        $password = md5($repassword);
    }else{
        echo "Error updating password";
    }
	// existing email address in our database
	$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 1){
		echo "failed $email";
		exit();
	} else {
		$sql = "UPDATE user_info SET 
                password='$password' 
                WHERE email = '$_SESSION[email]'";
		$run_query = mysqli_query($con,$sql);
        $_SESSION['password'] = $password;
        header("Location: ../details.php");
        echo "updated $_SESSION[email]";
	  }
?>