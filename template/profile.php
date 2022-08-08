<?php
require 'config/constants.php';
session_start();
if ( !isset( $_SESSION[ 'uid' ] ) ) {
    header( 'location:index.php' );
}
?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang = 'en-US'>
<meta charset = 'utf-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0, user-scalable=no'/>
<meta name = 'Keywords' content = 'Food,FoodHosts,eating,local,nshima,zambia,lusaka,hosting,guests,host,food lovers,foodies'/>
<meta name = 'Description' content = 'A meeting place for food lovers, hosting and dining in unique locations around the world.'/>
<link rel = 'icon' href = 'logo.png' type = 'image/x-icon'>

<head>
<title>Farmers Pride</title>
<link type = 'text/css' rel = 'stylesheet' href = 'css/css.css'>
<link href="uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
<script src="js/jquery2.js"></script>
<script src="main.js"></script>
<link href = 'https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap' rel = 'stylesheet'>
<link href = 'https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap' rel = 'stylesheet'>
<link rel = 'stylesheet' href = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>
</head>

<body>
<div class = 'navbar navbar-custom navbar-fixed-top'>
<div class = 'container-fluid'>
<div class = 'navbar-header'>
<a class = 'navbar-brand'>Farmers Pride</a>
</div>
<div class = 'collapse navbar-collapse' id = 'collapse'>
<ul class = 'nav navbar-nav'>
<li><a href = 'profile.php'><span class = 'glyphicon glyphicon-home'></span> Home</a></li>
<!-- <li><a href = 'profile.php'><span class = 'glyphicon glyphicon-modal-window'></span> Product</a></li> -->
<li style = 'width:520px;left:130px;top:10px;'><input type = 'text' class = 'form-control' id = 'search'></li>
<li style = 'top:10px;left:70px;'><button class = 'btn btn-primary' id="search_btn">Search</button></li>
</ul>
<ul class = 'nav navbar-nav navbar-right'>
<li><a href = '#' id = 'cart_container' class = 'dropdown-toggle' data-toggle = 'dropdown'><span class = 'glyphicon glyphicon-shopping-cart'></span> Cart <span class = 'badge'>0</span></a>
<div class = 'dropdown-menu' style = 'width:400px;'>
<div class = 'panel panel-success'>
<div class = 'panel-heading'>
<div class = 'row'>
<div class = 'col-md-3 col-xs-3'>Sl.No</div>
<div class = 'col-md-3 col-xs-3'>Product Image</div>
<div class = 'col-md-3 col-xs-3'>Product Name</div>
<div class = 'col-md-3 col-xs-3'>Price in <?php echo CURRENCY;
?></div>
</div>
</div>
<div class = 'panel-body'>
<div id = 'cart_product'>
</div>
</div>
<div class = 'panel-footer'></div>
</div>
</div>
</li>
<li><a href = '#' class = 'dropdown-toggle' data-toggle = 'dropdown'><span class = 'glyphicon glyphicon-user'></span> <?php echo 'Hi, '.$_SESSION[ 'name' ];
?></a>
<ul class = 'dropdown-menu'>
<li><a href = 'cart.php' style = 'text-decoration:none; color:black;'><span class = 'glyphicon glyphicon-shopping-cart'> Cart</a></li>
<li class = 'divider'></li>
<!-- <li><a href = 'customer_order.php' style = 'text-decoration:none; color:black;'>Orders</a></li> -->
<li><a href = 'details.php' style = 'text-decoration:none; color:black;'>Profile</a></li>
<li class = 'divider'></li>

<li><a href = 'logout.php' style = 'text-decoration:none; color:black;'>Logout</a></li>
</ul>
</li>

</ul>
</div>
</div>
</div>
