<?php
include_once 'config.php';
?>
<nav class="navbar navbar-expand-lg bg-info" data-bs-theme="light">
	<div class="container-fluid">
		<a class="navbar-brand" href="/index.php"><i class="bi bi-star-fill"></i> Tour </a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="bi bi-cup-hot"></i> Tin mới nhất</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/blogs/blogs.php"><i class="bi bi-cup-hot"></i>Blogs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/tours/tours.php"><i class="bi bi-cup-hot"></i>Tours</a>
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
								<li><a class="dropdown-item" href="chude.php"><i class="bi bi-diagram-2"></i> Chủ đề</a></li>
								<li><a class="dropdown-item" href="nguoidung.php"><i class="bi bi-people"></i> Người dùng</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="/blogs/myBlogs.php"><i class="bi bi-stickies"></i> Bài viết</a></li>
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
								<li><a class="dropdown-item" href="/blogs/blogs_them.php"><i class="bi bi-pencil-square"></i> Đăng bài viết</a></li>
								<li><a class="dropdown-item" href="/blogs/myBlogs.php"><i class="bi bi-person-badge"></i> Bài viết của tôi</a></li>
								<li><a class="dropdown-item" href="/tours/tours_quanly.php"><i class="bi bi-person-badge"></i> Quản lý tour</a></li>
								<li><a class="dropdown-item" href="/tours/tours_them.php"><i class="bi bi-person-badge"></i> Thêm tour</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="nguoidung_doimatkhau.php"><i class="bi bi-key"></i> Đổi mật khẩu</a></li>
							</ul>
						</li>
					<?php
					}
					?>
					<li class="nav-item">
						<a class="nav-link" href="/dangxuat.php"><i class="bi bi-box-arrow-right"></i> Đăng xuất</a>
					</li>
				<?php
				} else // Nếu chưa đăng nhập
				{
				?>
					<li class="nav-item">
						<a class="nav-link" href="/dangky/dangky.php"><i class="bi bi-person-plus"></i> Đăng ký</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/dangnhap/dangnhap.php"><i class="bi bi-box-arrow-in-right"></i> Đăng nhập</a>
					</li>
				<?php
				}
				?>
				
			</ul>
			<form class="d-flex" role="search">
				<input class="form-control me-2" type="search" placeholder="Bạn muốn tìm gì?" aria-label="Search" />
				<button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
			</form>
		</div>
	</div>
</nav>