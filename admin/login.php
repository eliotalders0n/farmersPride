<?php include "./templates/top.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:60px 0;">
		<div class="col-md-4">
			<h4 class="text-center">Admin Login</h4>
			<p class="message"></p>
			<form id="admin-login-form">
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
			    
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <input type="hidden" name="admin_login" value="1">
			  <button type="button" class="btn btn-success login-btn">Login</button>
			  <a class="nav-link" href="../admin/register.php">Don't have an account? Register</a>
			</form>
		</div>
	</div>
</div>





<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
