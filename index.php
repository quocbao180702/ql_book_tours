<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tour-Du lịch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<<<<<<< HEAD
=======
    <style>
    body {
        background-color: #f8f9fa;
        /* Light gray background color */
    }

    .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }

    .sidebar {
        background-color: #343a40;
        /* Dark gray sidebar background color */
        padding: 20px;
        color: #ffffff;
        /* White text color */
    }

    .mySlides {
        display: none;
    }

    .destination-card,
    .product-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 16px;
        margin-bottom: 20px;
    }

    .text-center {
        text-align: center;
    }
    
    </style>
>>>>>>> dien
</head>

<body >
    
    <div class="container-fluid">
        
        <div class="row">
            <!-- Main content -->
            <main class="col-md-9-md-4">
                <?php include_once "navbar.php"; ?>

                <!-- Featured Destinations -->

                <section class="mt-4">
                    <h2 class="mb-4 text-center">Featured Destinations</h2>
                    <div class="row">
                        <!-- Product 1 -->
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <div class="product-card text-center">
                                    <img src="hinh6.jpg" class="img-fluid product-image" alt="Product 1"
                                        height="200px">
                                    <h4>Sản phẩm 1</h4>
                                    <p>Nội dung 1.</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#productModal1">
                                        Chi tiết
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <div class="product-card text-center">
                                    <img src="hinh7.jpg" class="img-fluid product-image" alt="Product 2"
                                        height="200px">
                                    <h4>Sản phẩm 2</h4>
                                    <p>Nội dung 2.</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#productModal2">
                                        Chi tiết
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <div class="product-card text-center">
                                    <img src="hinh8.jpg" class="img-fluid product-image" alt="Product 3"
                                        height="200px">
                                    <h4>Sản phẩm 3</h4>
                                    <p>Nội dung 3.</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#productModal3">
                                        Chi tiết
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Featured Products -->
                <section class="mt-4">
                    <h2 class="mb-4 text-center">Featured Products</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <div class="product-card text-center">
                                    <img src="hinh3.jpg" class="img-fluid product-image" alt="Product 1" height: 200px;>
                                    <h4>sản phẩm 1</h4>
                                    <p>nội dung 1.</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#productModal1">
                                        Chi tiết
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <div class="product-card text-center">
                                    <img src="hinh4.jpg" class="img-fluid product-image" alt="Product 2" height: 200px;>
                                    <h4>sản phẩm 2</h4>
                                    <p>nội dung 2.</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#productModal2">
                                        Chi tiết
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <div class="product-card text-center">
                                    <img src="hinh5.jpg" class="img-fluid product-image" alt="Product 3" height: 200px;>
                                    <h4>sản phẩm 3</h4>
                                    <p>nội dung 3.</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#productModal3">
                                        Chi tiết
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>





                <?php include_once "footer.php"; ?>
            </main>
        </div>
    </div>

    <!-- Modal for Product 1 -->
    <div class="modal fade" id="productModal1" tabindex="-1" aria-labelledby="productModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModal1Label">Product 1 Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add detailed information for Product 1 here -->
                    <p>Detailed information about Product 1.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Similar modals for Product 2 and Product 3 -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <footer class="bg-dark text-light text-center py-3">
    <div class="container">
        <p>&copy; 2023 Your Company. All rights reserved.</p>
        <!-- Add additional information, links, or anything else you want in the footer -->
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</body>

</html>