<?php
require_once '../config.php';

$HoVaTen = $_POST['HoVaTen'];
$TenDangNhap = $_POST['TenDangNhap'];
$MatKhau = $_POST['MatKhau'];
$XacNhanMatKhau = $_POST['XacNhanMatKhau'];

try {
    $sql = 'INSERT INTO nguoidung(TenNguoiDung, TenDangNhap, MatKhau, QuyenHan, Khoa)
 VALUES (:HoVaTen, :TenDangNhap, :MatKhau, :QuyenHan, :Khoa)';
    $cmd = $conn->prepare($sql);
    $cmd->bindValue(':HoVaTen', $HoVaTen);
    $cmd->bindValue(':TenDangNhap', $TenDangNhap);
    $cmd->bindValue(':MatKhau', sha1($MatKhau));
    $cmd->bindValue(':QuyenHan', 2);
    $cmd->bindValue(':Khoa', 0);
    $result = $cmd->execute();

    $message = 'Đăng ký thành công!';
    include_once '../success.php';
} catch (PDOException $e) {
    echo $e->getMessage();
}
