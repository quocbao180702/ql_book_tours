<?php 
    require_once '../config.php';

    $ID  = $_POST['MaBaiViet'];
    $TieuDe = $_POST['TD'];
    $TomTat = $_POST['TT'];
    $NoiDung = $_POST['ND'];

    try{
        $sql = 'UPDATE noidungtin
                SET MaBaiViet=:MaBaiViet,
                    TieuDe = :TieuDe,
                    TomTat = :TomTat,
                    NoiDung = :NoiDung
                WHERE MaBaiViet = :MaBaiViet';
        $cmd = $conn->prepare($sql);
        $cmd->bindValue(':MaBaiViet', $ID);
        $cmd->bindValue(':TieuDe', $TieuDe);
        $cmd->bindValue(':TomTat', $TomTat);
        $cmd->bindValue(':NoiDung', $NoiDung);
        $result = $cmd->execute();
        $message = 'Cập nhật thành bài viết thành công';
        include_once '../success.php';
    }
    catch(PDOException $e){
        $error_message = $e->getMessage();
        include_once '../error.php';
    }
?>