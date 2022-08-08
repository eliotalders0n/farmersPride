<?php require "templates/header.php";?>
<div id="center">
    <h2>Hey, <?php echo $_SESSION["admin_name"]; ?></h2>
    <h2>Manage Customers</h2>
    <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>Address</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="category_list">
            <?php require "php/customersList.php";?>
          </tbody>
        </table>

</div>
<?php require "templates/footer.php";?>