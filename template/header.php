<?php
require 'config/constants.php';
$version = '1.5.1';
session_start();
// if ( !isset( $_SESSION[ 'uid' ] ) ) {
//     header( 'location:index.php' );
// }
?>
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
<link href = 'https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap' rel = 'stylesheet'>
<link href = 'https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap' rel = 'stylesheet'>
<link rel = 'stylesheet' href = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>
</head>

<body>
<div id = 'ribbon'>
<ul>
<li>FarmersPride</li>
<li><a href = 'index.php'><span class = 'glyphicon glyphicon-home'></span> Home</a></li>
<!-- <li><a href = 'index.php'><span class = 'glyphicon glyphicon-modal-window'></span> Product</a></li> -->
<li><input type = 'text' name = 'search' id="search"><a id="search_btn"><span class = 'glyphicon glyphicon-search' aria-hidden = 'true'></span></a></li>
<!-- <li><span class = 'glyphicon glyphicon-shopping-cart' aria-hidden = 'true'></span>Cart</li> -->
<!-- <li><a href = '#' class = 'dropdown-toggle' data-toggle = 'dropdown'><span class = 'glyphicon glyphicon-shopping-cart'></span> Cart <span class = 'badge' >0</span></a>
<div class = 'dropdown-menu' style = 'width:400px; margin-left:60%;'>
<div class = 'panel panel-success'>
<div class = 'panel-heading'>
<div class = 'row'>
<div class = 'col-md-3'>Sl.No</div>
<div class = 'col-md-3'>Product Image</div>
<div class = 'col-md-3'>Product Name</div>
<div class = 'col-md-3'>Price</div>
</div>
</div>
</div>
</div>
</li> -->
<!-- <li><span class = 'glyphicon glyphicon-user' aria-hidden = 'true'></span><a href = 'customer_reg_form.php'>Login/Register</a></li> -->
<li><a href = '#' class = 'dropdown-toggle' data-toggle = 'dropdown'><span class = 'glyphicon glyphicon-user'></span> login/register</a>
<div class = 'dropdown-menu' style = 'width:300px; margin-left:70%;'>
<div class = 'panel panel-success'>
<div class = 'panel-heading'>Login</div>
<div class = 'panel-heading'>
<form action = 'login.php' method = 'POST' id = 'login'>
<label for = 'email'>Email</label>
<input type = 'email' class = 'form-control' name = 'email' id = 'email'  style = 'width:100%;' required/>
<label for = 'email'>Password</label>
<input type = 'password' class = 'form-control' name = 'password' id = 'password' style = 'width:100%;' required/>
<p><br/></p>
<input type = 'submit' class = 'btn btn-warning' style = 'width:100%; margin-bottom:10px;' value = 'Login'>
<a href = 'customer_reg_form.php' style = 'color:black; text-decoration:none;'>Create Account Now</a>
</form>
</div>
<div class = 'panel-footer' id = 'e_msg'></div>
</div>
</div>
</li>
</ul>
</div>


