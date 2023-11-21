<?php
    require_once 'config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng ký thành công - News</title>
    <link rel="shortcut icon" href="images/premium.png" type="images/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container">
        <?php
          include_once 'navbar.php';
         ?>
        <div class="card my-5">
          <div class="card-header">
            Thông báo
          </div>
          <div class="card-body">
          <div class="alert alert-primary" role="alert">
                <?php echo $message?>
            </div>      
          </div>
        </div>
        <hr>
        <footer class="text-center">&copy Đặng Quốc Bảo - DTH205716</footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>