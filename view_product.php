<?php
// Include your database connection file
include 'database.php';

// Get the product's details from the AJAX request
$productId = $_POST['productId'];
$productBrand = $_POST['productBrand'];
$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];
$productQuantity = $_POST['productQuantity'];

// Create a new database object
$db = new Database();

// Call the viewProduct function with the product's ID
$product = $db->viewProduct($productId);

// Return the product's details as a JSON string
echo json_encode($product);
