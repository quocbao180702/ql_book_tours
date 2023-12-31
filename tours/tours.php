<?php
require_once '../config.php';
require_once '../thuvien.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tours</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="../public/css/tours.css" rel="stylesheet" />
</head>

<body>

  <div class="container">
    <?php include_once '../navbar.php'; ?>
    <div class="card-body">
      <div class="text-center">
        <hr />
        <h3>Danh sách Tours</h3>
        <hr />
      </div>
      <div class="row">
        <div class="col">
          <div class="row">
            <?php
            $sqlTours = 'SELECT * FROM tours WHERE id ORDER BY NgayDang DESC LIMIT 12';
            $cmdTours = $conn->prepare($sqlTours);
            $cmdTours->execute();
            $tours = $cmdTours->fetchAll();

            foreach (array_chunk($tours, 4) as $chilldArray) {
              echo '<div class="col-md-4">';
              foreach ($chilldArray as $value)
                echo '<article class="card mb-4">
                                    <header class="card-header">
                                        <a href="tours_chitiet.php?id=' . $value['ID'] . '">
                                          <h4 class="card-title">' . $value['TieuDe'] . '</h4>
                                        </a>
                                    </header>
                                      <a href="tours_chitiet.php?id=' . $value['ID'] . '">
                                        <img class="card-img" src="' . LayHinhDauTien($value['NoiDung']) . '" alt="" />
                                      </a>
                                      <a href="tours_chitiet.php?id=' . $value['ID'] . '">
                                        <p class="card-text">Giá Giảm: ' . $value['GiaGoc'] . ' VNĐ</p>
                                      </a>
                                      <a href="tours_chitiet.php?id=' . $value['ID'] . '">
                                        <p class="card-text">Giá: ' . $value['Gia'] . ' VNĐ</p>
                                      </a>
                                    </article>';
              echo '</div>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include_once "../footer.php"; ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>