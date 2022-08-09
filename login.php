<?php
include "db.php";

session_start();

#Login script is begin here
#If user given credential matches successfully with the data available in database then we will echo string login_success
#login_success string will go back to called Anonymous funtion $("#login").click() 
if(isset($_POST["email"]) && isset($_POST["password"])){
	$email = mysqli_real_escape_string($con,$_POST["email"]);
	$password = md5($_POST["password"]);
	$sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";

	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);

	//if user record is available in database then $count will be equal to 1
	if($count == 1){
		$row = mysqli_fetch_array($run_query);
		echo $row;
		$sql_p = "SELECT * FROM payment_details WHERE user_id = '$row[user_id]'";
		$run_query_p = mysqli_query($con,$sql_p);
		$count_p = mysqli_num_rows($run_query_p);	
		if($count_p == 1){
			$row_p = mysqli_fetch_array($run_query_p);
			$_SESSION["card_number"] = $row_p["card_number"];
			$_SESSION["cvv"] = $row_p["cvv"];
			$_SESSION["exp_date"] = $row_p["exp_date"];
			$_SESSION["Network"] = $row_p["Network"];
			$_SESSION["fullname"] = $row["first_name"] . " " . $row["last_name"];
		}
		$_SESSION["uid"] = $row["user_id"];
		$_SESSION["user_id"] = $row["user_id"];
		$_SESSION["name"] = $row["first_name"];
		$_SESSION["last_name"] = $row["last_name"];
		$_SESSION["email"] = $row["email"];
		$_SESSION["mobile"] = $row["mobile"];
		$_SESSION["address1"] = $row["address1"];
		$ip_add = getenv("REMOTE_ADDR");
		//we have created a cookie in login_form.php page so if that cookie is available means user is not login
			if (isset($_COOKIE["product_list"])) {
				$p_list = stripcslashes($_COOKIE["product_list"]);
				//here we are decoding stored json product list cookie to normal array
				$product_list = json_decode($p_list,true);
				for ($i=0; $i < count($product_list); $i++) { 
					//After getting user id from database here we are checking user cart item if there is already product is listed or not
					$verify_cart = "SELECT id FROM cart WHERE user_id = $_SESSION[uid] AND p_id = ".$product_list[$i];
					$result  = mysqli_query($con,$verify_cart);
					if(mysqli_num_rows($result) < 1){
						//if user is adding first time product into cart we will update user_id into database table with valid id
						$update_cart = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE ip_add = '$ip_add' AND user_id = -1";
						mysqli_query($con,$update_cart);
					}else{
						//if already that product is available into database table we will delete that record
						$delete_existing_product = "DELETE FROM cart WHERE user_id = -1 AND ip_add = '$ip_add' AND p_id = ".$product_list[$i];
						mysqli_query($con,$delete_existing_product);
					}
				}
				//here we are destroying user cookie
				setcookie("product_list","",strtotime("-1 day"),"/");
				//if user is logging from after cart page we will send cart_login
				echo "cart_login";
				exit();
				
			}
			//if user is login from page we will send login_success
			echo "login_success";
			header("Location: profile.php");
			exit();
		}else{
			echo "<span style='color:red;'>Please register before login..!</span>";
			exit();
		}
	
}

?>