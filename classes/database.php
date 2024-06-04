<?php 

class database{

    function opencon(){
        return new PDO('mysql:host=localhost;dbname=das_finals','root','');
    }

  
    function addProduct($product_category, $product_brand, $product_name, $product_quantity, $product_price, $product_image_path){ 
        $con = $this->opencon();
        $stmt = $con->prepare("INSERT INTO product (cat_id, product_brand, product_name, stocks, price, item_image) VALUES (?,?,?,?,?,?)");
        $stmt->execute([ $product_category, $product_brand, $product_name, $product_quantity, $product_price, $product_image_path]);
        
        // Get the ID of the last inserted row
        $last_id = $con->lastInsertId();

        // // Return the last inserted ID
        return $last_id;
    }

   
    function addCat($category){
        $con = $this->opencon();
        $stmt = $con->prepare("INSERT INTO category (cat_type) VALUES (?)");
        $result = $stmt->execute([$category]);
        return $result;
    }
 


    function viewCat(){
    $con = $this->opencon();
    return $stmt = $con->query("SELECT cat_id, cat_type FROM category") ->fetchAll();
    }

    function viewProducts(){
        $con = $this->opencon();
        return $stmt = $con->query("SELECT * FROM product") ->fetchAll();
    }

    function viewProducts1($categoryId = null) {
        $con = $this->opencon();
        if ($categoryId) {
            $stmt = $con->prepare("SELECT * FROM product WHERE cat_id = :cat_id");
            $stmt->bindParam(':cat_id', $categoryId);
        } else {
            $stmt = $con->prepare("SELECT * FROM product");
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function viewProduct($product_id){
        $con = $this->opencon();
        $stmt = $con->prepare("SELECT * FROM product WHERE product_id = ?");
        $stmt->execute([$product_id]);
        return $stmt->fetch();
    }


    
    function updateProduct($id, $product_brand, $product_name, $product_quantity, $product_price){
        try{
            $con = $this->opencon();
            $con->beginTransaction();
            $query = $con->prepare("UPDATE product SET product_brand=?, product_name=?, price=?, stocks=? WHERE product_id=?");
            $query->execute([$product_brand, $product_name, $product_price, $product_quantity, $id]);
            $con->commit();
            return true;
        } catch(PDOException $e) {
            $con->rollBack();
            return false;
        }
    }


function delete($productid){
    try{
        $con = $this->opencon();
        $con->beginTransaction();

        $query = $con->prepare("DELETE FROM product WHERE product_id = ?");
        $query->execute([$productid]);

        $con->commit();
        return true;

    } catch (PDOException $e) {
        $con->rollBack();
        return false;
    }
}



function lowStocks(){
    $con = $this->opencon();
    return $stmt = $con->query("SELECT * FROM product WHERE stocks < 35") ->fetchAll();
}

//Funtion on products.php

function insertOrders($customer_name, $product_id, $quantity_ordered){
    $con = $this->opencon();
    $query = $con->prepare("INSERT INTO orders (customer_name, product_id, quantity_ordered) VALUES (?, ?, ?)");
    if (!$query->execute([$customer_name, $product_id, $quantity_ordered])) {
        throw new Exception($query->errorInfo()[2]);
    }
    return $con->lastInsertId();
}

function insertTransaction($order_id, $payment_method, $payment_date, $total){
    $con = $this->opencon();
    $query = $con->prepare("INSERT INTO transactions (order_id, payment_method, paymentdate, payment_total) VALUES (?, ?, ?, ?)");
    if (!$query->execute([$order_id, $payment_method, $payment_date, $total])) {
        throw new Exception($query->errorInfo()[2]);
    }
}

function updateProductStock($product_id, $quantity){
    try{
        $con = $this->opencon();
        $con->beginTransaction();
        $query = $con->prepare("UPDATE product SET stocks = stocks - ? WHERE product_id = ?");
        $query->execute([$quantity, $product_id]);
        $con->commit();
        return true;
    } catch(PDOException $e) {
        $con->rollBack();
        return false;
    }
}



// Pagination for Transaction Records

function viewTransactions($start_from, $records_per_page) {
    $con = $this->opencon();
    $stmt = $con->prepare("SELECT
    orders.customer_name,
    transactions.trans_id,
    transactions.payment_method,
    DATE(transactions.paymentdate) AS paymentdate,
    COUNT(orders.order_id) AS total_orders,
    SUM(transactions.payment_total) AS total_purchases
FROM
    transactions
INNER JOIN orders ON transactions.order_id = orders.order_id
GROUP BY
    orders.customer_name,
    transactions.paymentdate
ORDER BY
    `transactions`.`paymentdate`
DESC LIMIT :start_from, :records_per_page");
    $stmt->bindParam(':start_from', $start_from, PDO::PARAM_INT);
    $stmt->bindParam(':records_per_page', $records_per_page, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getTotalTransactions(){
    $con = $this->opencon();
    $stmt = $con->prepare("SELECT COUNT(*) as total FROM (
        SELECT
            orders.customer_name,
            transactions.trans_id,
            transactions.payment_method,
            DATE(transactions.paymentdate) AS paymentdate,
            COUNT(orders.order_id) AS total_orders,
            SUM(transactions.payment_total) AS total_purchases
        FROM
            transactions
        INNER JOIN orders ON transactions.order_id = orders.order_id
        GROUP BY
            orders.customer_name,
            transactions.paymentdate
        ORDER BY
            `transactions`.`paymentdate` DESC
    ) as subquery");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['total'];
}

// Pagination for Orders Made by Customers

function viewOrders($start_from, $records_per_page){
    $con = $this->opencon();
    $stmt = $con->prepare("SELECT product.product_id, CONCAT(product.product_brand , ' ', product.product_name) as product, product.price, orders.order_id, orders.quantity_ordered, (product.price * orders.quantity_ordered) AS total_price FROM `orders` INNER JOIN product ON orders.product_id = product.product_id GROUP BY order_id ORDER BY `orders`.`order_id` DESC LIMIT :start_from, :records_per_page");
    $stmt->bindParam(':start_from', $start_from, PDO::PARAM_INT);
    $stmt->bindParam(':records_per_page', $records_per_page, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getTotalOrders(){
    $con = $this->opencon();
    $stmt = $con->query("SELECT COUNT(*) FROM `orders`");
    return $stmt->fetchColumn();
}


function getOrderDetails($order_id){
    try{
        $con = $this->opencon();
        $stmt = $con->prepare("SELECT product.product_id, CONCAT(product.product_brand , ' ', product.product_name) as product, product.price, orders.customer_name, orders.order_id, orders.quantity_ordered, product.price, orders.quantity_ordered FROM `orders` INNER JOIN product ON orders.product_id = product.product_id WHERE orders.order_id = ?");
        $stmt->execute([$order_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        return false;
    }
}

function totalCompletedOrders(){
    $con = $this->opencon();
        $stmt = $con->query("SELECT COUNT(*) as total FROM (
            SELECT transactions.paymentdate
            FROM transactions
            GROUP BY transactions.paymentdate
        ) as grouped_transactions");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function completedOrdersforToday(){
   $con = $this->opencon();
    $stmt = $con->query("SELECT COUNT(*) as total FROM (
        SELECT transactions.paymentdate
        FROM transactions
        WHERE DATE(transactions.paymentdate) = CURDATE()
        GROUP BY transactions.paymentdate
    ) as grouped_transactions");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


function topProduct(){
    $con = $this->opencon();
    $stmt = $con->query("SELECT
    product.product_id,
    product.item_image,
    product.product_brand,
    product.product_name,
    SUM(orders.quantity_ordered) AS total_sales
FROM
    orders
INNER JOIN product ON orders.product_id = product.product_id
GROUP BY
    product.product_id");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}




function searchProducts($searchQuery) {
    $con = $this->opencon();
    $stmt = $con->prepare("SELECT * FROM product WHERE product_name LIKE :searchQuery OR product_brand LIKE :searchQuery");

    $searchParam = "%$searchQuery%";
    $stmt->bindParam(':searchQuery', $searchParam);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


}