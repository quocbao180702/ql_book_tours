<?php
    require_once 'config.php';
    require_once 'thuvien.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tour-Du lịch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- <style>
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
    
    </style> -->
</head>

<body>

    <div class="container">

        <div class="row">
            <!-- Main content -->
            <main class="col-md-9-md-4">
                <?php include_once "navbar.php"; ?>

                <!-- Featured Destinations -->
                <section class="mt-4">
                    <h2 class="mb-4 text-center">Tours Nổi Bật</h2>
                    <div class="row">
                        <?php
                        $sqlTours = 'SELECT * FROM tours WHERE id ORDER BY NgayDang DESC LIMIT 3';
                        $cmdTours = $conn->prepare($sqlTours);
                        $cmdTours->execute();
                        $tours = $cmdTours->fetchAll();

                        foreach (array_chunk($tours, 3) as $childArray) {
                            echo '<div class="row">';
                            foreach ($childArray as $value) {
                                echo '<div class="col-md-4">
                                    <div class="d-flex justify-content-center">
                                    <div class="product-card text-center">
                                    <img src="'.LayHinhDauTien($value['NoiDung']) .'" class="img-fluid product-image" alt="Product 2" height="200px">
                                    <h4>' . $value['TieuDe'] . '</h4>
                                    <p>Giá: ' . $value['Gia'] . ' VNĐ</p>
                                    <a class = "btn btn-primary" href="tours/tours_chitiet.php?id=' . $value['ID'] . '">
                                        <p class="card-text">Chi Tiết</p>
                                    </a>
                                    </div>
                                </div>
                            </div>';
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                </section>



                <!-- Featured Products -->
                <section class="mt-4 mb-4">
                    <h2 class="mb-4 text-center">Blogs Nổi Bật</h2>
                    <div class="row">
                        <?php
                            $sqlBlogs = 'SELECT * FROM noidungtin WHERE MaBaiViet ORDER BY LuotXem DESC LIMIT 3';
                            $cmdBlogs = $conn->prepare($sqlBlogs);
                            $cmdBlogs->execute();
                            $blogs = $cmdBlogs->fetchAll();
                            foreach ($blogs as $blog) {
                                echo '<div class="col-md-4">
                                <div class="d-flex justify-content-center">
                                    <div class="product-card text-center">
                                        <img src="'.LayHinhDauTien($blog['NoiDung']) .'" class="img-fluid product-image" alt="Product 1" height: 200px;>
                                        <h4>'. $blog['TieuDe'].'</h4>
                                        <p>' . $blog['TomTat'].'</p>
                                        <a class="btn btn-primary" href="tours_chitiet.php?id=' . $blog['MaBaiViet'] . '">
                                            <p class="card-text">Chi Tiết</p>
                                        </a>
                                    </div>
                                </div>
                            </div>';
                            }
                        ?>

                    </div>
                </section>
                <?php include_once "footer.php"; ?>
            </main>
        </div>
    </div>


    <!-- Similar modals for Product 2 and Product 3 -->
    <footer class="bg-dark text-light text-center py-3">
        <div class="container">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
            <!-- Add additional information, links, or anything else you want in the footer -->
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>