<?php
    require_once '../config.php';
    $ID = $_POST['ID'];
    $TieuDe = $_POST['TieuDe'];
    $GiaGoc = $_POST['GiaGoc'];
    $Gia = $_POST['Gia'];
    $NoiDung = $_POST['NoiDung'];
    $DanhMuc = $_POST['DanhMuc'];
    try
    {
        $sql = 'UPDATE tours
                SET TieuDe = :TieuDe,
                    GiaGoc = :GiaGoc,
                    Gia = :Gia,
                    NoiDung = :NoiDung,
                    DanhMuc = :DanhMuc
                WHERE ID = :ID';
    $cmd = $conn->prepare($sql);
    $cmd->bindValue(':ID', $ID);
    $cmd->bindValue(':TieuDe', $TieuDe);
    $cmd->bindValue(':GiaGoc', $GiaGoc);
    $cmd->bindValue(':Gia', $Gia);
    $cmd->bindValue(':NoiDung', $NoiDung);
    $cmd->bindValue(':DanhMuc', $DanhMuc);
    $result = $cmd->execute();
    include_once 'tours_quanly.php';
    }
    catch(PDOException $e)
    {
    echo $e->getMessage();
    }
