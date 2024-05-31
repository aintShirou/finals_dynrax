<?php
    
    require_once('classes/database.php');
    $con = new database();  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynrax Auto Supply</title>

    <!-- Style -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.css">

    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

  <!-- header -->

  

    <!-- Main Container -->

    <div class="main-container">

      <!-- Aside Navbar -->
      
      <div class="aside">
        <div class="navbar-logo">
            <a href="index.php"><img src="import/Dynrax Web Finals.png"></a>
        </div>
    
        <div class="navbar-toggle">
            <span></span>
        </div>
    
        <ul class="nav">
            <li><a href="index.php" style="text-decoration:none;" class="active"><i class="bx bx-home"></i>Home</a></li>
            <li><a href="product.php" style="text-decoration:none;"><i class="bx bx-package"></i>Order</a></li>
            <li><a href="transaction.php" style="text-decoration:none;"><i class="bx bx-cart"></i>Transaction</a></li>
            <li><a href="stock.php" style="text-decoration:none;"><i class="bx bx-store"></i>Stock</a></li>
            <li><a href="sale.php" style="text-decoration:none;"><i class="bx bx-dollar"></i>Total Sale</a></li>
        </ul>
    
      </div>

      <!-- Main Content -->
      <div class="main-content">

        <!-- Home Section -->
        <section class="home active section" id="home">
            <div class="welcome-user">
                <!-- Display of Username -->
                <h2>Welcome, Username!</h2>
            </div>

            <!-- Analytics -->

            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">
                  <div class="box">
                    <h3>Total Sales</h3>
                    <h1>999</h1>
                    <p><span>100%</span> +₱2.8k this week</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="box">
                    <h3>Total Customers</h3>
                    <h1>999</h1>
                    <p><span>100%</span> +₱2.8k this week</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="box">
                    <h3>Transaction History</h3>
                    <h1>999</h1>
                    <p><span>100%</span> +₱2.8k this week</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="box">
                    <h3>Product in Stocks</h3>
                    <h1>999</h1>
                    <p><span>100%</span> +₱2.8k this week</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Charts -->

            <div class="container-fluid">
              <div class="row mr-1">
                <div class="col-md-7">
                  <div class="titles-home">
                    <h3>Low Quantity</h3>
                  </div>
                <div class="lowstock">
                    <div class="row low-stock-products">
                        <!-- Low stock product cards will be dynamically generated here -->
                        <?php 
                            $lowStockProducts = $con->lowStocks();
                            foreach($lowStockProducts as $product) {
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12 low-stock-product-card">
                            <div class="product-card">
                                <img class="product-image" src="<?php echo $product['item_image']; ?>" alt="Product Image">
                                <div class="product-details">
                                    <h4 class="product-name" style="color:black;"><?php echo $product['product_name']; ?></h4>
                                    <p class="product-quantity">Only <strong><?php echo $product['stocks']; ?></strong> left in stock!</p>
                                    <a class="product-link" href="stock.php">Go To Stock</a>
                                </div>
                            </div>
                        </div>
                        <?php 
                            } // End of the loop
                        ?>
                        <!-- More low stock product cards can be added here -->
                    </div>
                </div>
                </div>
                <div class="col-md-5">
                  <div class="titles-home">
                    <h3>Top Product</h3>
                  </div>
                  <div class="topproducts">
                    <!-- View top product of the day -->
                    <div class="container-fluid my-2">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="top-product-card bg-black-100 p-3 rounded">
                            <div class="product-card-top">
                              <img class="product-image rounded" src="./uploads/example.jpg" alt="Product Image" width="50" height="50">
                              <div class="product-details text-white">
                                <h4 class="product-name">Oil</h4>
                                <h4 class="product-category">Category:</h4>
                                <p class="product-sales">100pcs</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Add more columns for more product cards -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </section>

      </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.js"></script>
    <script src="script.js"></script>
    <script src="additem.js"></script>

</body>
</html>