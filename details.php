<?php require "template/profile.php";
        require "template/profile_sidebar.php";?>
<div id="center_profile">
    <h2 style="margin-left: 0px"><?php echo $_SESSION[ 'name' ]; ?>'s Profile</h2>
    <h2 style="margin-left: 0px; font-size: 18px;">Account</h2>
    <p>Get personal with your account, edit and update your information</p>
    <form action="account/accounts.php" method="POST">
    <input type="text" name="uid" id="uid" value="<?php echo $_SESSION[ 'uid' ]; ?>" hidden="true">
    <label>First Name</label>
    <input type="text" name="first_name" id="first_name" value="<?php echo $_SESSION[ 'name' ]; ?>" class="form-control">
    <label>Last Name</label>
    <input type="text" name="last_name" id="last_name" value="<?php echo $_SESSION[ 'last_name' ]; ?>" class="form-control">
    <label>Email</label>
    <input type="text" name="email" id="email" value="<?php echo $_SESSION[ 'email' ]; ?>" class="form-control">
    <label>Mobile</label>
    <input type="text" name="mobile" id="mobile" value="<?php echo $_SESSION[ 'mobile' ]; ?>" class="form-control">
    <button type="submit" class="btn btn-primary" id="update">Update</button>
    </form>
    <!-- <label>Password</label>
    <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" class="form-control">
    <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" class="form-control"> -->
        </div>
</div>
<p id="footer">© Sandra Masiwa 2022</p>
<?php require "template/footer.php";?>

<script src="js/jquery2.js"></script>
<script src="js/index.js"></script>