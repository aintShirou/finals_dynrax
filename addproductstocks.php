<?php
require_once('classes/database.php');
$con = new database();


$product_id = $_POST['productId'];
$quantity = $_POST['quantity'];


$result = $con->addProductStock($product_id, $quantity);

echo $result? 'true' : 'false'; 
