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
	
	<title>Đơn hàng của tôi</title>
	
	<!-- Favicon and Touch Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png" />
	
	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
		
		<div class="container pb-5 mb-2 mb-md-4">
			<div class="row">
				<section class="col-lg-8">
					<div class="table-responsive fs-md mb-4">
						<table class="table table-hover mb-0">
							<thead>
								<tr>
									<th>Tên Tours</th>
									<th>Số Lượng</th>
									<th>Tổng tiền</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$userID = $_SESSION['ID'];
									$sqlDonHang = 'SELECT * FROM donhang dh, donhang_chitiet ct, tours t WHERE dh.id = ct.donhang_id AND ct.user_id = t.ID AND dh.user_id = :UserID';
									$cmdDonhang = $conn->prepare($sqlDonHang);
									$cmdDonhang->bindParam(':UserID', $userID);
                  					$cmdDonhang->execute();
                  					$donhang = $cmdDonhang->fetchAll();
									foreach($donhang as $dh){
										echo '
										<tr>
											<td class="py-3">'.$dh['TieuDe'].'</td>
											<td class="py-3">'.$dh['soluongban'].'</td>
											<td class="py-3 text-end">'.$dh['dongiaban'].'</td>
										</tr>';
									}

								?>
							</tbody>
						</table>
					</div>
				</section>
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