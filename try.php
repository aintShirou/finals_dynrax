<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynrax Auto Supply | Stock</title>

    <!-- Style -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.css">

    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

    <div class="main-container">

        <div class="aside">
            <div class="navbar-logo">
                <a href="index.html"><img src="import/Dynrax Web Finals.png"></a>
            </div>
        
            <div class="navbar-toggle">
                <span></span>
            </div>
        
            <ul class="nav">
                <li><a href="index.html" style="text-decoration:none"><i class="bx bx-home"></i>Home</a></li>
                <li><a href="product.html" style="text-decoration:none;"><i class="bx bx-package"></i>Product</a></li>
                <li><a href="transaction.html" style="text-decoration:none;"><i class="bx bx-cart"></i>Transaction</a></li>
                <li><a href="stock.html" style="text-decoration:none;" class="active"><i class="bx bx-store"></i>Stock</a></li>
                <li><a href="sale.html" style="text-decoration:none;"><i class="bx bx-dollar"></i>Total Sale</a></li>
            </ul>
        
          </div>

          <div class="main-content">

            <section class="stock section" id="stock">

                <div class="title-product">
                  <h1>Stocks</h1>
                </div>
      
                <div class="stocks">
      
                    <div class="stockhead">
                      <div class="row">
                        <div class="col-md-10">
                          <div class="search-cat">
                            <div class="search-bar">
                              <input type="text" class="form-control" placeholder="Search products...">
                            </div>
                            <div class="stock-category">
                              <label for="stockCategory" class="form-label">Category</label>
                              <select class="form-select" id="stockCategory">
                                  <option value="0">Select Category</option>
                                  <option value="1">Auto Parts</option>
                                  <option value="2">Oil/Fluids</option>
                                  <option value="3">Car Accessories</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">

                          <div class="select-option">
                            <div class="dropdown">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="stockCategoryDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-plus" style="font-size: 35px;"></i>
                              </button>
                            
                              <div class="dropdown-menu" aria-labelledby="stockCategoryDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductModal"> Add Product</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addcategoryModal">Add Category</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                
      
                  <div class="productcardview">
                    <div class="container-fluid my-5">
                      <div class="card-container">
                        <div class="card">
                          <!-- Image -->
                          <img src="uploads/example.jpg" class="card-img-top" alt="Item Image">
                          <div class="card-body">
                            <!-- Item Name -->
                            <h5 class="card-title">Item Name</h5>
                            <!-- Item Price -->
                            <p class="card-text">Price: $10</p>
                            <!-- Item Quantity -->
                            <p class="card-text">Quantity: 2</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <button class="btn btn-success" data-toggle="modal" data-target="#editProductModal">
                                <i class='bx bxs-edit' style="font-size: 25px; vertical-align: middle;"></i>
                              </button>
                              <button class="btn btn-danger">
                                <i class='bx bx-trash' style="font-size: 25px; vertical-align: middle;"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <!-- paginationHTML insert Here -->
      
                </div>
      
              </section>
            
          </div>

    </div>

    <!-- Add Product Modal -->

    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
          <div class="modal-header">
            <h5 class="modal-title text-white" id="addProductModalLabel">Add Product</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="productImage" class="form-label text-white">Product Image</label>
                <div class="input-group">
                  <input type="file" class="form-control d-none" id="productImage" aria-describedby="inputGroupFileAddon" onchange="previewImage()">
                  <label class="input-group-text" for="productImage">
                    <i class="bx bx-image" style="font-size: 1.5rem; color: #fff;"></i>
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <img id="preview" src="#" alt="Preview Image" style="max-width: 150px; display: none;">
              </div>
              <div class="mb-3">
                <label for="productName" class="form-label text-white">Product Name</label>
                <input type="text" class="form-control" id="productName">
              </div>
              <div class="mb-3">
                <label for="productCategory" class="form-label text-white">Category</label>
                <select class="form-select" id="productCategory">
                  <option value="0">Select Category</option>
                  <option value="1">Auto Parts</option>
                  <option value="2">Oil/Fluids</option>
                  <option value="3">Car Accessories</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="productQuantity" class="form-label text-white">Quantity</label>
                <input type="number" class="form-control" id="productQuantity">
              </div>
              <div class="mb-3">
                <label for="productPrice" class="form-label text-white">Price</label>
                <input type="text" class="form-control" id="productPrice">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger">Add Product</button>
          </div>
        </div>
      </div>
    </div>
  
      <!-- Edit Product Modal -->
      <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header" style="color: #fff;">
                    <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                </div>
                <div class="modal-body" style="color: #fff;">
                    <form>
                        <div class="mb-3">
                            <label for="editProductName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="editProductName">
                        </div>
                        <div class="mb-3">
                            <label for="editProductPrice" class="form-label">Price</label>
                            <input type="text" class="form-control" id="editProductPrice">
                        </div>
                        <div class="mb-3">
                            <label for="editProductQuantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="editProductQuantity">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Save changes</button>
                </div>
            </div>
        </div>
      </div>

      <div class="modal fade" id="addcategoryModal" tabindex="-1" aria-labelledby="addcategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header" style="color: #fff;">
                    <h5 class="modal-title" id="addcategoryModalLabel">Add Category</h5>
                </div>
                <div class="modal-body" style="color: #fff;">
                    <form>
                        <div class="mb-3">
                            <label for="addcategory" class="form-label">Category</label>
                            <input type="text" class="form-control" id="addcategory">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Save changes</button>
                </div>
            </div>
        </div>
      </div>

      <script>
        $(document).ready(function() {
          $('.dropdown-toggle').dropdown();
        });
      </script>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="script.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
    
</body>
</html>