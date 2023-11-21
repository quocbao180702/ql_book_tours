<?php
    require_once '../config.php';
    $id = $_GET['id'];
    try
    {
        $sql = 'DELETE FROM tours WHERE ID = :ID';
        $cmd = $conn->prepare($sql);
        $cmd->bindValue(':ID', $id);
        $result = $cmd->execute();
        include_once 'tours_quanly.php';
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
?>