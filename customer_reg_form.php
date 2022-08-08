<?php
//connect to server
// require 'sql/server.php';
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en-US">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
<meta name="Keywords" content="Food,FoodHosts,eating,local,nshima,zambia,lusaka,hosting,guests,host,food lovers,foodies"/>   
<meta name="Description" content="A meeting place for food lovers, hosting and dining in unique locations around the world."/>  
<link rel="icon" href="logo.png" type="image/x-icon">
    
<head>
<title>Farmers Pride</title>
    <link type="text/css" rel="stylesheet" href="css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
    
<body>
<div id="ribbon">
        <ul>
            <li>FarmersPride</li>
            <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span><a href="index.php">Home</a></li>
        </ul>
</div>
<!-- this code is executed when the form is submitted -->
<?php if (isset($_POST['form_submitted'])): ?> 
	<?php if (!isset($_POST['agree'])): ?>
		<p> You must agree to the terms and conditions </p>
		<?php else: ?>
    

		<h3> Thank you for registering! <?php echo $_POST['f_name']; ?></h3>
	<?php endif; ?>
<?php else: ?>
<!-- this code is executed if the form is not submitted -->
            <form id="signup_form" action="registration_form.php" method="POST">
                        <h3>Customer Registration Form</h3>
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control" required>
							</div>
							<div class="col-md-6">
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" id="password" name="password"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Confirm Password</label>
								<input type="password" id="repassword" name="repassword"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Contact Number</label>
								<input type="text" id="mobile" name="mobile"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address 1</label>
								<input type="text" id="address1" name="address1"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Address 2</label>
								<input type="text" id="address2" name="address2"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Accept terms and conditions</label>
								<input type="checkbox" name="agree" required>
							</div>
						</div>
						<input type="hidden" name="form_submitted" value="1"/>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="width:100%;" value="Sign Up" type="submit" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>
					</div>
				</form>
			<?php endif; ?>
		</body>
</html>