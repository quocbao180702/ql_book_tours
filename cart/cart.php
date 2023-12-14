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

	<title>Giỏ hàng</title>

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
		<!-- <header class="shadow-sm">
			<div class="navbar-sticky bg-light">
				<div class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<a class="navbar-brand d-none d-sm-block flex-shrink-0" href="#">
							<img src="img/logo-dark.png" width="142" />
						</a>
						<a class="navbar-brand d-sm-none flex-shrink-0 me-2" href="#">
							<img src="img/logo-icon.png" width="74" />
						</a>
						<div class="input-group d-none d-lg-flex mx-4">
							<input class="form-control rounded-end pe-5" type="text" placeholder="Tìm kiếm" />
							<i class="ci-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i>
						</div>
						<div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
								<span class="navbar-toggler-icon"></span>
							</button>
							<a class="navbar-tool navbar-stuck-toggler" href="#">
								<span class="navbar-tool-tooltip">Mở rộng menu</span>
								<div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div>
							</a>
							<a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#">
								<div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
								<div class="navbar-tool-text ms-n3"><small>Xin chào</small>Khách hàng</div>
							</a>
							<div class="navbar-tool ms-3">
								<a class="navbar-tool-icon-box bg-secondary" href="#">
									<span class="navbar-tool-label">1</span><i class="navbar-tool-icon ci-cart"></i>
								</a>
								<a class="navbar-tool-text" href="#"><small>Giỏ hàng</small>3.000.000đ</a>
							</div>
						</div>
					</div>
				</div>
				<div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
					<div class="container">
						<div class="collapse navbar-collapse" id="navbarCollapse">
							<div class="input-group d-lg-none my-3">
								<i class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
								<input class="form-control rounded-start" type="text" placeholder="Tìm kiếm" />
							</div>
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link ps-lg-0" href="#">
										<i class="ci-home me-2"></i>Trang chủ
									</a>
								</li>
							</ul>
							<ul class="navbar-nav">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ci-gift me-2"></i>Sản phẩm</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Điện thoại</a></li>
										<li><a class="dropdown-item" href="#">Máy tính bảng</a></li>
										<li><a class="dropdown-item" href="#">Máy tính xách tay</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="ci-globe me-2"></i>Tin tức</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="ci-loudspeaker me-2"></i>Tuyển dụng</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="ci-support me-2"></i>Liên hệ</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header> -->
		<?php
		include_once '../navbar.php';
		?>

		<!-- <div class="page-title-overlap bg-dark pt-4">
			<div class="container d-lg-flex justify-content-between py-2 py-lg-3">
				<div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
							<li class="breadcrumb-item">
								<a class="text-nowrap" href="#"><i class="ci-home"></i>Trang chủ</a>
							</li>
							<li class="breadcrumb-item text-nowrap">
								<a href="#">Sản phẩm</a>
							</li>
							<li class="breadcrumb-item text-nowrap active" aria-current="page">Giỏ hàng</li>
						</ol>
					</nav>
				</div>
				<div class="order-lg-1 pe-lg-4 text-center text-lg-start">
					<h1 class="h3 text-light mb-0">Giỏ hàng</h1>
				</div>
			</div>
		</div> -->

		<div class="container pb-5 mb-2 mb-md-4">
			<div class="row">
				<section class="col-lg-8">
					<div class="d-flex justify-content-between align-items-center pt-3 pb-4 pb-sm-5 mt-1">
						<h2 class="h6 text-light mb-0">Sản phẩm trong giỏ</h2>
					</div>
					<?php

					if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
						foreach ($_SESSION['cart'] as $key => $item) {
							echo '<div class="d-sm-flex justify-content-between align-items-center pb-3 border-bottom">
									<div class="d-block d-sm-flex align-items-center text-center text-sm-start">
										<div class="pt-2">
											<h3 class="product-title fs-base mb-2">' . $item['name'] . '</h3>
											<div class="fs-lg text-accent pt-2">' . $item['price'] . '<small>đ</small></div>
										</div>
									</div>
									<div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width:9rem;">
										<label class="form-label" for="quantity">Số lượng</label>
										<form method="post" action="delete_item.php"> <!-- Replace delete_item.php with your delete handler -->
											<input type="hidden" name="item_index" value="' . $key . '">
											<input class="form-control" type="number" id="quantity" name="quantity" min="1" value="' . $item['quantity'] . '" />
											<button type="submit" class="btn btn-link px-0 text-danger" name="delete_item">
												<i class="ci-close-circle me-2"></i><span class="fs-sm">Xóa</span>
											</button>
										</form>
									</div>
								</div>';
						}
					} else {
						header("Location: /cart/cart_empty.php");
						exit();
					}
					?>

					<button class="btn btn-outline-accent d-block w-100 mt-4" type="button">
						<i class="ci-loading fs-base me-2"></i>Cập nhật giỏ hàng
					</button>
				</section>

				<aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
					<div class="bg-white rounded-3 shadow-lg p-4">
						<div class="py-2 px-xl-2">
							<div class="text-center mb-4 pb-3 border-bottom">
								<h2 class="h6 mb-3 pb-1">Tổng tiền</h2>
								<?php
								$tongtien = 0;
								$tienTour = 0;
								if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
									foreach ($_SESSION['cart'] as $key => $item) {
										$tienTour = $item['quantity'] * $item['price'];
										$tongtien = $tongtien + $tienTour;
									}
								}
								echo '<h3 class="fw-normal">' . $tongtien . '<small>đ</small></h3>'
								?>

							</div>
							<form action="xuly_dathang.php" method="POST">
								<?php
									echo '<input type="number" class="form-control" id="Gia" name="Gia" hidden value="'.$tongtien.'"/>'
								?>
								<div class="mb-4">
									<label class="form-label" for="dienthoai">Số điện thoại</label>
									<input type="text" class="form-control" id="dienthoai" name="dienthoai">
								</div>
								<div class="mb-4">
									<label class="form-label" for="address">Ghi Chú</label>
									<textarea class="form-control" rows="9" id="diachi" name="diachi"></textarea>
								</div>
								<button type="submit" class="btn btn-primary btn-shadow d-block w-100 mt-4">
									<i class="ci-card fs-lg me-2"></i>Thanh toán
								</button>
							</form>

						</div>
					</div>
				</aside>
			</div>
		</div>
	</main>

	<!-- <footer class="footer bg-dark">
		<div class="pt-5 bg-darker">
			<div class="container">
				<div class="row pb-2">
					<div class="col-md-6 text-center text-md-start mb-4">
						<div class="text-nowrap mb-4">
							<a class="d-inline-block align-middle mt-n1 me-3" href="#"><img class="d-block" src="img/footer-logo-light.png" width="117" /></a>
						</div>
						<div class="widget widget-links widget-light">
							<ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Trang chủ</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Sản phẩm</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Tin tức</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Tuyển dụng</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 text-center text-md-end mb-4">
						<div class="mb-3">
							<a class="btn-social bs-light bs-twitter ms-2 mb-2" href="#"><i class="ci-twitter"></i></a>
							<a class="btn-social bs-light bs-facebook ms-2 mb-2" href="#"><i class="ci-facebook"></i></a>
							<a class="btn-social bs-light bs-instagram ms-2 mb-2" href="#"><i class="ci-instagram"></i></a>
							<a class="btn-social bs-light bs-pinterest ms-2 mb-2" href="#"><i class="ci-pinterest"></i></a>
							<a class="btn-social bs-light bs-youtube ms-2 mb-2" href="#"><i class="ci-youtube"></i></a>
						</div>
					</div>
				</div>
				<div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">Bản quyền © 2023 bởi Cartzilla.</div>
			</div>
		</div>
	</footer> -->
	<?php
	include_once '../footer.php';
	?>

	<a class="btn-scroll-top" href="#top" data-scroll>
		<span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
		<i class="btn-scroll-top-icon ci-arrow-up"></i>
	</a>

</body>

</html>