<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynrax Auto Supply | Transaction</title>

    <!-- Style -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.css">

    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    
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
                <li><a href="index.php" style="text-decoration:none;"><i class="bx bx-home"></i>Home</a></li>
                <li><a href="product.php" style="text-decoration:none;"><i class="bx bx-package"></i>Order</a></li>
                <li><a href="transaction.php" style="text-decoration:none;" class="active"><i class="bx bx-cart"></i>Transaction</a></li>
                <li><a href="stock.php" style="text-decoration:none;"><i class="bx bx-store"></i>Stock</a></li>
                <li><a href="sale.php" style="text-decoration:none;"><i class="bx bx-dollar"></i>Total Sale</a></li>
            </ul>
            
            </div>

        <div class="main-content">

            <section class="transaction section" id="transaction">

                <div class="title-product">
                  <h1>Transactions</h1>
                </div>
      
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-7">
      
                      <!-- Calculate the Income -->
                      <div class="income">
      
                        <h3>Income</h3>
                        <h4 class="increase">+ ₱5,000</h4>
      
                        <!-- Selection of Date to view Income -->
      
                      </div>
      
                      <!-- Transaction of the Customer -->
                      <div class="transactions">
                        <div class="trans-head">
      
                          <!-- Selection of Date to view Transaction -->
      
                        </div>
      
                        <!-- Table for Transaction -->
      
                        <div class="table-trans">
                          <table>
                            <tbody>
                              <tr>
                                <td>Customer Number</td>
                                <td>Payment Method</td>
                                <td>Price</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
      
                      </div>
      
                    </div>
                    <div class="col-md-5">
                      <div class="order-recent">
                        <h2>Recent Purchase</h2>
      
                        <!-- Recent Purchases -->
                        <div class="recent-pur">
                          <table>
                            <thead>
                              <tr>
                                <th>Product</th>
                                <th>Customer Numer</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Oil</td>
                                <td>#563927</td>
                                <td>5/24/2023</td>
                                <td>₱1500</td>
                                <td><span class="text-success">Success</span></td>
                              </tr>
                              <tr>
                                <td>Tail Light</td>
                                <td>#123453</td>
                                <td>5/18/2023</td>
                                <td>₱2500</td>
                                <td><span class="text-danger">Failed</span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
      
                        <!-- paginationHTMl insert Here -->
      
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

</body>
</html>