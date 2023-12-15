<?php
require_once '../config.php';
require_once '../thuvien.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tours chi tiết</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="../public/css/tours_chitiet.css" rel="stylesheet" />
</head>

<body>
    <div id="khungtrang">
    <?php include_once '../navbar.php'; ?>
        <?php
        $id = $_GET['id'];
        $sqlTourChiTiet = "SELECT * FROM tours WHERE id = $id";
        $cmdTourChiTiet = $conn->prepare($sqlTourChiTiet);
        $cmdTourChiTiet->execute();
        $TourChiTiet = $cmdTourChiTiet->fetch();
        echo '<div id="main">';
        echo ' <div id="left">
                        <img src="' . LayHinhDauTien($TourChiTiet['NoiDung']) . '" alt="Image" width="100%" height="100%" />
                    </div>';
        echo '<div id="right">
                        <p>' . $TourChiTiet['TieuDe'] . '</p>
                        <p>Giá giảm: ' . $TourChiTiet['GiaGoc'] . ' VNĐ</p>
                        <p>Giá: ' . $TourChiTiet['Gia'] . ' VNĐ</p>
                        <form action="/cart/xuly_shopping.php" method="POST">
                            <input type="text" class="form-control" id="IdTour" name="IdTour" value="'.$TourChiTiet['ID'] .'" hidden/>
                            <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Đăt Hàng </button>
                        </form>
                    </div>';
        echo '  <div id="bottom">
                        <p>Mô Tả Du Lịch</p>
                        <p>' . $TourChiTiet['NoiDung'] . '</p>
                    </div>';
        echo '</div>';
        ?>
    </div>
    </div>
</body>

</html>