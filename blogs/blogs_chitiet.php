<!DOCTYPE html>
<?php
include_once '../config.php';
include_once '../thuvien.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs Chi Tiet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <style>
        .line{
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include_once '../navbar.php'; ?>
        <?php
        $id = $_GET['id'];
        $sqlBlogChiTiet = "SELECT * FROM noidungtin WHERE MaBaiViet = $id";
        $cmdBlogChiTiet = $conn->prepare($sqlBlogChiTiet);
        $cmdBlogChiTiet->execute();
        $BlogChiTiet = $cmdBlogChiTiet->fetch();
        echo '<div class="mt-5">';
        echo '<div>';
        echo '<div>
                <p class="text-center"><small>'.$BlogChiTiet['NgayDang'].'</small></p>
                <h1 class="text-center">'.$BlogChiTiet['TieuDe'].'</h1>
              </div>';
        echo '</div>';
        echo '  <div>
                    <p>' . $BlogChiTiet['TomTat'] . '</p>
                    <div class="line"></div>
                    <h6>Nội Dung Tin</h6>
                    <p>' . $BlogChiTiet['NoiDung'] . '</p>
                </div>';
        echo '</div>';
        ?>
    </div>
    <?php include_once "../footer.php"; ?>
    
</body>
</html>