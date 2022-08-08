<?php require "templates/header.php";?>

<div id="center">
    <h2>Hey, <?php echo $_SESSION["admin_name"]; ?></h2>
    <h2>Admin Details</h2>
    <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody id="admin_list">
          <?php require "php/dashboardList.php";?>
          </tbody>
        </table>
</div>
<?php require "templates/footer.php";?>