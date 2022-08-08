<?php require "template/profile.php";
        require "template/profile_sidebar.php";?>
<div id="center_profile">
    <h2 style="margin-left: 0px"><?php echo $_SESSION[ 'name' ]; ?>'s Profile</h2>
    <h2 style="margin-left: 0px; font-size: 18px;">Payments</h2>
    <p>Your default preferences are used for payments</p>
    <div class="tabs">
    <h2 style="margin-left: 0px; font-size: 18px;">Bank</h2>
    <form action="account/payments.php" method="POST">
    <input type="text" name="uid" id="uid" value="<?php echo $_SESSION[ 'uid' ]; ?>" hidden="true">
    <label>Name on card</label>
    <input type="text" name="name" id="name" value="<?php echo $_SESSION[ 'name' ] ." ". $_SESSION[ 'last_name' ]; ?>" class="form-control">
    <label>Card number</label>
    <input type="text" name="card_number" id="card_number" value="<?php echo $_SESSION[ 'card_number' ]; ?>" class="form-control">
    <label>CVV</label>
    <input type="text" name="cvv" id="cvv" value="<?php echo $_SESSION[ 'cvv' ]; ?>" class="form-control">
    <label>Expiration date</label>
    <input type="date" name="exp_date" id="exp_date" value="<?php echo $_SESSION[ 'exp_date' ]; ?>" class="form-control">
    <br>
    <h2 style="margin-left: 0px; font-size: 18px;">Billing address</h2>
    <label>Address</label>
    <input type="text" name="address" id="address" value="<?php echo $_SESSION[ 'address1' ]; ?>" class="form-control">
    <button type="submit" class="btn btn-primary" id="update">Update</button>
    </form>
    </div>

    <div class="tabs">
    <h2 style="margin-left: 0px; font-size: 18px;">Mobile Money</h2>
    <form action="account/accounts.php" method="POST">
    <input type="text" name="uid" id="uid" value="<?php echo $_SESSION[ 'uid' ]; ?>" hidden="true">
    <label>First Name</label>
    <input type="text" name="first_name" id="first_name" value="<?php echo $_SESSION[ 'name' ]; ?>" class="form-control">
    <label>Last Name</label>
    <input type="text" name="last_name" id="last_name" value="<?php echo $_SESSION[ 'last_name' ]; ?>" class="form-control">
    <label>Network</label><br>
    <select name="network">
                <option value="Airtel">Airtel Money</option>
                <option value="MTN">MTN Mobile Money</option>
    </select><br>
    <label>Mobile</label>
    <input type="number" name="mobile" id="mobile" value="<?php echo $_SESSION[ 'mobile' ]; ?>" class="form-control">
    <button type="submit" class="btn btn-primary" id="update">Update</button>
    </form>
    </div>

</div>
<p id="footer">© Sandra Masiwa 2022</p>
<?php require "template/footer.php";?>

<script src="js/jquery2.js"></script>
<script src="js/index.js"></script>