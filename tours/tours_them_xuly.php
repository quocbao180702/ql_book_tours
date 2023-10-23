<?php
    require_once '../config.php';

    $TieuDe = $_POST['TieuDe'];
    $GiaGiam = $_POST['GiaGiam'];
    $Gia = $_POST['Gia'];
    //$HinhAnh = $_FILES['HinhAnh']['name'];
    //$HinhAnh_tmp = $_FILES['HinhAnh']['tmp_name'];
    $NoiDung = $_POST['NoiDung'];
    $DanhMuc = $_POST['DanhMuc'];
    try
    {

        // Mã người dùng
        //$MaNguoiDung = $_SESSION['ID'];
        // Kiểm quyệt
        //$KiemDuyet = $_SESSION['QuyenHan'] == 1 ? 1 : 0;
        $sql = 'INSERT INTO sanpham(tieude, giagiam, gia, noidung, danhmuc)
                VALUES (:TieuDe, :GiaGiam, :Gia, :NoiDung, :DanhMuc)';
        $cmd = $conn->prepare($sql);
        $cmd->bindValue(':TieuDe', $TieuDe);
        $cmd->bindValue(':GiaGiam', $GiaGiam);
        $cmd->bindValue(':Gia', $Gia);
       // $cmd->bindValue(':HinhAnh', $HinhAnh);
        $cmd->bindValue(':NoiDung', $NoiDung);
        $cmd->bindValue(':DanhMuc', $DanhMuc);
        $result = $cmd->execute();
        
   

        include_once 'tours.php';
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
        
?>