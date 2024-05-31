<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dynrax Auto Supply | Products</title>

    <!-- Style -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.css">

    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

    <div class="maint-container">

        <div class="aside">
            <div class="navbar-logo">
                <a href="index.html"><img src="import/Dynrax Web Finals.png"></a>
            </div>
        
            <div class="navbar-toggle">
                <span></span>
            </div>
        
            <ul class="nav">
                <li><a href="index.php" style="text-decoration:none;"><i class="bx bx-home"></i>Home</a></li>
                <li><a href="product.php" style="text-decoration:none;" class="active"><i class="bx bx-package"></i>Order</a></li>
                <li><a href="transaction.php" style="text-decoration:none;"><i class="bx bx-cart"></i>Transaction</a></li>
                <li><a href="stock.php" style="text-decoration:none;"><i class="bx bx-store"></i>Stock</a></li>
                <li><a href="sale.php" style="text-decoration:none;"><i class="bx bx-dollar"></i>Total Sale</a></li>
            </ul>
        
          </div>
    
        <div class="main-content">
    
            <section class="product section" id="product">
    
                <div class="title-product">
                  <h1>Products</h1>
                </div>
      
                <!-- Chart of Sales -->
      
                <div class="products">
                  <div class="container-fluid">
        
                      <!-- To add item for Customer Order -->
                        <div class="item-view">
                          <div class="product-detail">
      
                            <div class="items">
                              <h2>Customer Order</h2>
                            </div>
      
                            <!-- Customer Order Form -->
                            
                            <form class="order-form">
                              <div class="orders">
                                <div class="searchbar">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" placeholder="Enter Customer Name" name="customer_name">
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" placeholder="Search products..." name="search_products">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="mb-3">
                                      <label for="productCategory" class="form-label">Category</label>
                                      <select class="form-select" id="productCategory" name="product_category">
                                        <option value="0">Select Category</option>
                                        <option value="1">Auto Parts</option>
                                        <option value="2">Oil/Fluids</option>
                                        <option value="3">Car Accessories</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="mb-3">
                                      <label for="paymentmethod" class="form-label">Payment Method</label>
                                      <select class="form-select" id="paymentmethod" name="payment_method">
                                        <option value="0">Select Payment</option>
                                        <option value="1">Cash</option>
                                        <option value="2">Debit/Credit</option>
                                        <option value="3">E-Wallet</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            
                              <div class="container-fluid my-5">
                                <div class="card-container">
                                  <div class="view-products">
                                    <div class="product-boxs">
                                      <div class="row">
                                        <div class="col-md-3">
                                          <img class="product-image" src="uploads/example.jpg">
                                        </div>
                                        <div class="col-md-6">
                                          <div class="product-details">  
                                            <p class="product-title">High performance Engine Oil</p>
                                            <h2 class="product-price">₱902</h2>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="add-cart-button">
                                            <button>Add to Cart</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="view-products">
                                    <div class="product-boxs">
                                      <div class="row">
                                        <div class="col-md-3">
                                          <img class="product-image" src="uploads/example.jpg">
                                        </div>
                                        <div class="col-md-6">
                                          <div class="product-details">  
                                            <p class="product-title">High performance Engine Oil</p>
                                            <h2 class="product-price">₱902</h2>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="add-cart-button">
                                            <button>Add to Cart</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                            
                              <!-- paginationHTML insert Here -->
                            
                              <div class="checkout">
                                <div class="head"><p>My Cart</p></div>
                                <div id="cartItem">Your cart is Empty</div>
                                <div class="foot">
                                  <h3>Total</h3>
                                  <h2 id="total">₱ 0.00</h2>
                                  <button id="checkoutButton" type="submit">Checkout</button>
                                </div>
                              </div>
                            </form>
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
    <!-- <script src="additem.js"></script> -->

</body>
</html>