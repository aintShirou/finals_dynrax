<?php
require_once('classes/database.php');
$con = new database();

$product_id = $_GET['productId'];


$product_details = $con->getProductDetails($product_id);

echo json_encode($product_details);
