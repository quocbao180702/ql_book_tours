<?php
    require_once '../config.php';

    $id = $_GET['id'];

    try{
        $sql = 'DELETE FROM noidungtin WHERE MaBaiViet = :MaBaiViet';
        $cmd = $conn->prepare($sql);
        $cmd->bindValue(':MaBaiViet', $id);
        $result = $cmd->execute();

        $message = 'Đã xóa bài biết thành công';
        header("Location: /blogs/myBlogs.php");
    }
    catch(PDOException $e){
        $error_message = $e->getMessage();
        include_once "../error.php";
    }
?>