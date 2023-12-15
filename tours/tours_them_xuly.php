<?php
    require_once '../config.php';

    $TieuDe = $_POST['TieuDe'];
    $GiaGoc = $_POST['GiaGoc'];
    $Gia = $_POST['Gia'];
    $NoiDung = $_POST['NoiDung'];
    $DanhMuc = $_POST['DanhMuc'];
    try
    {

        $sql = 'INSERT INTO tours(TieuDe, GiaGoc, Gia, NoiDung, NgayDang, DanhMuc)
                VALUES (:TieuDe, :GiaGoc, :Gia, :NoiDung, :NgayDang, :DanhMuc)';
        $cmd = $conn->prepare($sql);
        $cmd->bindValue(':TieuDe', $TieuDe);
        $cmd->bindValue(':GiaGoc', $GiaGoc);
        $cmd->bindValue(':Gia', $Gia);
        $cmd->bindValue(':NoiDung', $NoiDung);
        $cmd->bindValue(':NgayDang', date('Y-m-d H:i:s')); // Lấy giờ hiện tại của server
        $cmd->bindValue(':DanhMuc', $DanhMuc);
        $result = $cmd->execute();
        
        include_once 'tours_quanly.php';
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
        
?>