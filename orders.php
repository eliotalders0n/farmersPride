<?php require "template/profile.php";
        require "template/profile_sidebar.php";?>
<div id="center_profile">
    <h2 style="margin-left: 0px"><?php echo $_SESSION[ 'name' ]; ?>'s Profile</h2>
    <h2 style="margin-left: 0px; font-size: 18px;">Orders</h2>
    <p>View your current orders and purchase status</p>
    <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Image</th>  
              <th>Name</th>
              <th>Status</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="orders_list">
          </tbody>
        </table>
        </div>
</div>
<p id="footer">© Sandra Masiwa 2022</p>
<?php require "template/footer.php";?>

<script src="js/jquery2.js"></script>
<script src="js/index.js"></script>