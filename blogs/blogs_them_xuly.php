<?php
require_once '../config.php';

$TieuDe = $_POST['TieuDe'];
$TomTat = $_POST['TomTat'];
$NoiDung = $_POST['NoiDung'];

try {

    // Mã người dùng
    $MaNguoiDung = $_SESSION['ID'];
    /* $MaNguoiDung = 1; */

    // Kiểm quyệt
    /* 
     */
    $KiemDuyet = 1;

    $sql = 'INSERT INTO noidungtin(MaNguoiDung, TieuDe, TomTat, NoiDung, NgayDang, LuotXem, KiemDuyet)
    VALUES (:MaNguoiDung, :TieuDe, :TomTat, :NoiDung, :NgayDang, :LuotXem, :KiemDuyet)';
    $cmd = $conn->prepare($sql);
    $cmd->bindValue(':MaNguoiDung', $MaNguoiDung);
    $cmd->bindValue(':TieuDe', $TieuDe);
    $cmd->bindValue(':TomTat', $TomTat);
    $cmd->bindValue(':NoiDung', $NoiDung);
    $cmd->bindValue(':NgayDang', date('Y-m-d H:i:s'));

    $cmd->bindValue(':LuotXem', 0);
    $cmd->bindValue(':KiemDuyet', $KiemDuyet);
    $result = $cmd->execute();

    $message = 'Đăng bài viết thành công!';
    include_once '../success.php';
} catch (PDOException $e) {
    echo $e->getMessage();
    include_once '../error.php';
}
