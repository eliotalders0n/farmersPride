<?php // where i went wrong
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecommerceapp";

// Create connection
$con = new mysqli($servername, $username, $password, $database);

// $query = "SELECT * FROM orders";
$query = "SELECT o.order_id, o.product_id, o.qty, o.trx_id, o.p_status, p.product_title, p.product_image FROM orders o JOIN products p ON o.product_id = p.product_id";
$result = mysqli_query($con, $query);

$rows = mysqli_num_rows($result);
for ($j = 0 ; $j < $rows ; ++$j)
{
$row = mysqli_fetch_row($result);
    
echo '<tr>
        <td>'.$row[0].'</td>
        <td>'.$row[1].'</td>
        <td>'.$row[5].'</td>
        <td>'.$row[2].'</td>
        <td>'.$row[3].'</td>
        <td>'.$row[4].'</td>
    </tr>';
}
?>