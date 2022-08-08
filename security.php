<?php require "template/profile.php";
        require "template/profile_sidebar.php";?>
<div id="center_profile">
    <h2 style="margin-left: 0px"><?php echo $_SESSION[ 'name' ]; ?>'s Profile</h2>
    <h2 style="margin-left: 0px; font-size: 18px;">Security</h2>
    <p>Keep your information safe here.</p>
    <form action="account/security.php" method="POST">
    <input type="text" name="uid" id="uid" value="<?php echo $_SESSION[ 'uid' ]; ?>" hidden="true">
    <label>Password</label>
    <input type="text" name="password" id="password" class="form-control">
    <label>Repeat Password</label>
    <input type="text" name="repassword" id="repassword" class="form-control">
    <button type="submit" class="btn btn-primary" id="update">Update</button>
    </form>
        </div>
</div>
<p id="footer">© Sandra Masiwa 2022</p>
<?php require "template/footer.php";?>

<script src="js/jquery2.js"></script>
<script src="js/index.js"></script>