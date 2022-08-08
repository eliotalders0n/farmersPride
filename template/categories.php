<?php // where i went wrong
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecommerceapp";

// Create connection
$con = new mysqli($servername, $username, $password, $database);

$query = "SELECT * FROM categories";
$result = mysqli_query($con, $query);

$rows = mysqli_num_rows($result);
for ($j = 0 ; $j < $rows ; ++$j)
{
$row = mysqli_fetch_row($result);
    
echo '<li><a href="#">'.$row[1].'</a></li>';
}
?>