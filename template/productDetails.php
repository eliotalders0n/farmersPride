<?php // where i went wrong
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecommerceapp";

// Create connection
$con = new mysqli($servername, $username, $password, $database);


$id = mysqli_real_escape_string($con, $_REQUEST['pid']);
// $id = 2;

$query = "SELECT * FROM products WHERE product_id = $id";
// $category = "SELECT  c.cat_id, c.cat_title FROM products p JOIN categories c ON c.cat_id = p.product_cat";
$result = mysqli_query($con, $query); 

$rows = mysqli_num_rows($result);
for ($j = 0 ; $j < $rows ; ++$j)
{
$row = mysqli_fetch_row($result);

$category = "SELECT cat_title FROM categories WHERE cat_id = $row[1]";
$category_result = mysqli_query($con, $category);
if (mysqli_num_rows($category_result) > 0) {
    // output data of each row
    while($cat = mysqli_fetch_assoc($category_result)) {
        $category_title = $cat["cat_title"];
    
echo '
    
        <div id="l_card_status">
        <p id="status_color">'.$row[8].'</p>
        <img src="product_images/'.$row[6].'" id="p_image">
        </div>
        
        <div id="l_card">

        <div id="l_card_title">
        <h2>'.$row[2].'</h2>
        </div>

        <div id="l_card_price">
        <br>
        <p><b>ZMW '.$row[3].'.00</b></p>
        </div>

        <div id="l_card_desc">
        <p><h4>'.$row[5].'</h4></p>
        <br>
        </div>

        <div id="l_card_quantity">
        <p><b>Quantity</b> '.$row[4].'</p>
        <br>
        </div>

        <div id="l_card_category">
        <p><b>Category</b> '.$category_title.'</p>
        </div>

        <div id="l_card_keywords">
        <p><b>Keywords</b> '.$row[7].'</p>
        <br>
        </div>

        <div id="l_card_add">
        <button style="float:right;" class="tn btn-xs"  data-toggle="modal" data-target="#addProduct" pid='.$row[0].' id="product">ADD TO CART</button>
        </div>
    
        </div>';
        
    }
}
}
?>