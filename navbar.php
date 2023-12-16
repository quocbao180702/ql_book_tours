<?php
include_once 'config.php';
?>
<nav class="navbar navbar-expand-lg bg-info" data-bs-theme="light">
	<div class="container-fluid">
		<a class="navbar-brand" href="/index.php">Team 11</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="/blogs/blogs.php"></i>Blogs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/tours/tours.php"></i>Tours</a>
				</li>
				<?php

				if (isset($_SESSION['ID'])) // Nếu đã đăng nhập
				{
				?>
					<?php
					if ($_SESSION['QuyenHan'] == 1) // Nếu là Quản trị viên
					{
					?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-database-gear"></i> Quản lý</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="/blogs/blogs_them.php"> Đăng bài viết</a></li>
								<li><a class="dropdown-item" href="/blogs/myBlogs.php"> Bài viết của tôi</a></li>
								<li><a class="dropdown-item" href="/tours/tours_quanly.php"> Quản lý tour</a></li>
								<li><a class="dropdown-item" href="/tours/tours_them.php"> Thêm tour</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="/blogs/myBlogs.php"> Bài viết</a></li>
								<li><a class="dropdown-item" href="/cart/cart.php">Giỏ hàng</a></li>
								<li><a class="dropdown-item" href="/cart/my_orders.php">Tour đã đặt</a></li>
								<li><a class="dropdown-item" href="/doimatkhau/doimatkhau.php"> Đổi mật khẩu</a></li>
							</ul>
						</li>
					<?php
					} else {
					?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-person-circle"></i> <?php echo $_SESSION['HoVaTen']; ?>
							</a>
							<ul class="dropdown-menu">

								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="doimatkhau/doimatkhau.php">Đổi mật khẩu</a></li>
								<li><a class="dropdown-item" href="/cart/cart.php"> Giỏ hàng</a></li>
								<li><a class="dropdown-item" href="/cart/my_orders.php">Tour đã đặt</a></li>
							</ul>
						</li>
					<?php
					}
					?>
					<li class="nav-item">
						<a class="nav-link" href="/dangxuat.php">Đăng xuất</a>
					</li>
				<?php
				} else // Nếu chưa đăng nhập
				{
				?>
					<li class="nav-item">
						<a class="nav-link" href="/dangky/dangky.php"> Đăng ký</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/dangnhap/dangnhap.php"> Đăng nhập</a>
					</li>
				<?php
				}
				?>
				
			</ul>
			<form class="d-flex" role="search" action="../tours/tours_timkiem.php" method="POST">
				<input class="form-control me-2" type="search" name="tukhoa" placeholder="Bạn muốn tìm gì?" aria-label="Search" />
				<button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
			</form>
		</div>
	</div>
</nav>