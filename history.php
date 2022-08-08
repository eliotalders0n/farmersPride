<?php require "template/profile.php";
        require "template/profile_sidebar.php";?>
<div id="center_profile">
    <h2 style="margin-left: 0px"><?php echo $_SESSION[ 'name' ]; ?>'s Profile</h2>
    <h2 style="margin-left: 0px; font-size: 18px;">History</h2>
    <p>All your account activity will show up here.</p>
    <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Activity</th>
              <th>Details</th>  
              <th>Date</th>
              <th>Time</th>
            </tr>
          </thead>
          <tbody id="orders_list">
          </tbody>
        </table>
    <!-- <label>Password</label>
    <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" class="form-control">
    <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" class="form-control"> -->
        </div>
</div>
<p id="footer">© Sandra Masiwa 2022</p>
<?php require "template/footer.php";?>

<script src="js/jquery2.js"></script>
<script src="js/index.js"></script>