<?php
	require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	
	<!-- SEO Meta Tags -->
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="theme-color" content="#ffffff" />
	
	<title>Giỏ hàng rỗng</title>
	
	<!-- Favicon and Touch Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png" />
	
	<!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body class="handheld-toolbar-enabled">
	<main class="page-wrapper">
        <?php
            include_once '../navbar.php';
        ?>
		
		<div class="container py-5 mb-lg-3">
			<div class="row justify-content-center pt-lg-4 text-center">
				<div class="col-lg-7 col-md-8 col-sm-9">
					<img class="d-block mx-auto mb-5" src="../public/images/empty.png" width="340" />
					<h1 class="h3">Giỏ hàng rỗng</h1>
					<h3 class="h5 fw-normal mb-4">Xin vui lòng ghé thăm cửa hàng và tiến hành chọn sản phẩm.</h3>
					<p class="fs-md mb-4">
						<u>Dưới đây là một số liên kết gợi ý:</u>
					</p>
				</div>
			</div>
		</div>
	</main>
	
	<div style="position: fixed;
    				bottom: 0;
    				width: 100%;">
			<?php include_once "../footer.php"; ?>
		</div>

	
</body>
</html>