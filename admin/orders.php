<?php require "templates/header.php";?>
<div id="center">
    <h2>Hey, <?php echo $_SESSION["admin_name"]; ?></h2>
    <h2>Manage Orders</h2>
    <table class="table table-striped table-sm">
          <thead>
            <tr>  
              <th>Order #</th>
              <th>Product Id</th>
              <th>Product Name</th>
              <th>Quantity</th>
              <th>Trx Id</th>
              <th>Payment Status</th>
            </tr>
          </thead>
          <tbody id="category_list">
            <?php require "php/ordersList.php";?>
          </tbody>
        </table>

</div>
<?php require "templates/footer.php";?>