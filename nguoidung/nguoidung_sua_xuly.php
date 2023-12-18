<?php
	require_once '../config.php';
	
	$ID = $_POST['ID'];
	$HoVaTen = $_POST['HoVaTen'];
	$TenDangNhap = $_POST['TenDangNhap'];
	$MatKhau = $_POST['MatKhau'];
	$XacNhanMatKhau = $_POST['XacNhanMatKhau'];
	$QuyenHan = $_POST['QuyenHan'];
	$Khoa = empty($_POST['KhoaTaiKhoan']) ? 0 : 1;
	
	try
	{
		if(empty($MatKhau))
		{
			$sql = 'UPDATE	nguoidung
					SET		TenNguoiDung = :HoVaTen,
							TenDangNhap = :TenDangNhap,
							QuyenHan = :QuyenHan,
							Khoa = :Khoa
					WHERE	MaNguoiDung = :ID';
			$cmd = $conn->prepare($sql);
			$cmd->bindValue(':ID', $ID);
			$cmd->bindValue(':HoVaTen', $HoVaTen);
			$cmd->bindValue(':TenDangNhap', $TenDangNhap);
			$cmd->bindValue(':QuyenHan', $QuyenHan);
			$cmd->bindValue(':Khoa', $Khoa);
			$result = $cmd->execute();
		}
		else
		{
			$sql = 'UPDATE	nguoidung
					SET		TenNguoiDung = :HoVaTen,
							TenDangNhap = :TenDangNhap,
							MatKhau = :MatKhau,
							QuyenHan = :QuyenHan,
							Khoa = :Khoa
					WHERE	MaNguoiDung = :ID';
			$cmd = $conn->prepare($sql);
			$cmd->bindValue(':ID', $ID);
			$cmd->bindValue(':HoVaTen', $HoVaTen);
			$cmd->bindValue(':TenDangNhap', $TenDangNhap);
			$cmd->bindValue(':MatKhau', sha1($MatKhau));
			$cmd->bindValue(':QuyenHan', $QuyenHan);
			$cmd->bindValue(':Khoa', $Khoa);
			$result = $cmd->execute();
		}
		
		header('Location: nguoidung.php');
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>