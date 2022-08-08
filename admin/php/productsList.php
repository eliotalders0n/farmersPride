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
    
echo '<tr>
<td>'.$row[0].'</td>
<td>'.$row[2].'</td>
<td>'.$row[6].'</td>
<td>'.$row[3].'</td>
<td>'.$row[4].'</td>
<td>'.$row[1].'</td>
<td><a class="btn btn-sm btn-info">Edit</a><a class="btn btn-sm btn-danger">Delete</a></td>
</tr>';
}
?>