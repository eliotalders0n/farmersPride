<?php // where i went wrong
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecommerceapp";

// Create connection
$con = new mysqli($servername, $username, $password, $database);

$query = "SELECT * FROM products";
$result = mysqli_query($con, $query);

$rows = mysqli_num_rows($result);
for ($j = 0 ; $j < $rows ; ++$j)
{
$row = mysqli_fetch_row($result);
    
echo '
        <div id="card">
        <p>'.$row[2].'</p>
        <img src="product_images/'.$row[6].'">
        <p>ZMW '.$row[3].'.00</p>
        <button style="float:right;" class="btn btn-danger btn-xs" id="product">AddToCart</button>
        </div>';
}
?>