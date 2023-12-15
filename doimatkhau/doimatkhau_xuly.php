<?php
require_once '../config.php';

$TenDangNhap = $_POST['TenDangNhap'];
$MatKhau = $_POST['MatKhau'];

try {
    // Pre-calculate the hash before binding
    $hashedPassword = sha1($MatKhau);

    $sql = "UPDATE nguoidung SET MatKhau = :hashedPassword WHERE TenDangNhap = :TenDangNhap";
    $cmd = $conn->prepare($sql);
    $cmd->bindParam(':TenDangNhap', $TenDangNhap);
    $cmd->bindParam(':hashedPassword', $hashedPassword);
    $result = $cmd->execute();

    $message = 'Đổi mật khẩu thành công!';
    include_once '../success.php';
} catch (PDOException $e) {
    echo $e->getMessage();
}
