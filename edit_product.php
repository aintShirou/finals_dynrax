<?php

require_once('classes/database.php');
$con = new database();  

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the product's details from the form
    $id = $_POST['id'];
    $productBrand = $_POST['productBrand'];
    $productName = $_POST['productName'];
    $productQuantity = $_POST['productQuantity'];
    $productPrice = $_POST['productPrice'];

    // Validate the product's details
    if (!$id || !$productBrand || !$productName ||!$productQuantity || !$productPrice) {
        echo 'Please fill in all fields';
        exit;
    }

    try {
        // Call the updateProduct function
        $result = $con->updateProduct($id, $productBrand, $productName, $productQuantity, $productPrice);

        // Check if the product is updated
        if ($result) {
            echo 'Product updated successfully';
        } else {
            echo 'Failed to update product';
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}