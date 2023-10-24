<?php
    require_once '../config.php';

    $id = $_GET['id'];

    try{
        $sql = 'DELETE FROM noidungtin WHERE ID = :ID';
        $cmd = $conn->prepare($sql);
        $cmd->bindValue(':ID', $id);
        $result = $cmd->execute();

        $message = 'Đã xóa bài biết thành công';
    }
    catch(PDOException $e){
        $error_message = $e->getMessage();
    }
?>