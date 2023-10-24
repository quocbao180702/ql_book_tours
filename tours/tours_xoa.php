<?php
    require_once '../config.php';
    $id = $_GET['id'];
    try
    {
        $sql = 'DELETE FROM sanpham WHERE ID = :ID';
        $cmd = $conn->prepare($sql);
        $cmd->bindValue(':ID', $id);
        $result = $cmd->execute();
        include_once 'tours.php';
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
?>