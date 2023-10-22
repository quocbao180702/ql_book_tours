<!DOCTYPE html>
<?php
include_once '../config.php';
include_once '../thuvien.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-8">
                    <h2>Danh sách blogs</h2>
                    <?php
                    $sql = 'SELECT * FROM doan.noidungtin n, doan.nguoidung nd WHERE n.MaNguoiDung = nd.MaNguoiDung';
                    $cmd = $conn->prepare($sql);
                    $cmd->execute();
                    $result = $cmd->fetchAll();
                    foreach ($result as $blog) {
                        echo '<div class="card mb-3" style="width:100%; max-height: 240px;">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <img src="/public/images/1-1.jpg" class="img-fluid rounded-start" alt="..." style="max-height: 240px; width: auto;">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title">' . $blog['TieuDe'] . '</h5>
                                            <p class="card-text">' . $blog['TomTat'] . '</p>
                                            <p class="card-text"><small class="text-body-secondary"><time class="timeago" datetime="' . (DinhDangNgayGio($blog['NgayDang'])) . '"></time></small></p>
                                            <p class="card-text"><small class="text-body-secondary"> '.$blog['TenNguoiDung'].'</small><p>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
                    ?>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-4">
                    <h5>Blogs Nổi Bật</h5>
                </div>
            </div>
        </div>
    </div>
</body>

</html>