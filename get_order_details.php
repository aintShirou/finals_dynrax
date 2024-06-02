<?php
require_once('classes/database.php');
$con = new database();

if (isset($_GET['id'])) {
    $orderId = $_GET['id'];
    $order = $con->getOrderDetails($orderId);

    // Output the order details as HTML
    echo "<p><strong>Customer Name:</strong> " . htmlspecialchars($order['customer_name']) . "</p>";
    echo "<p><strong>Item Name:</strong> " . htmlspecialchars($order['product']) . "</p>";
    echo "<p><strong>Price:</strong> " . htmlspecialchars($order['price']) . "</p>";
    echo "<p><strong>Quantity:</strong> " . htmlspecialchars($order['quantity_ordered']) . "</p>";
}