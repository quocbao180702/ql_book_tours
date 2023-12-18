<?php
require_once '../config.php';

if (isset($_SESSION['ID']) && isset($_SESSION['cart'])) {
    $userID = $_SESSION['ID'];
    $cart = $_SESSION['cart'];

    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];

    $sqlInsertOrder = "INSERT INTO donhang (user_id, dienthoaigiaohang, diachigiaohang) VALUES (:user_id, :dienthoai, :diachi)";
    $stmtOrder = $conn->prepare($sqlInsertOrder);
    $stmtOrder->bindParam(':user_id', $userID);
    $stmtOrder->bindParam(':dienthoai', $dienthoai);
    $stmtOrder->bindParam(':diachi', $diachi);
    $stmtOrder->execute();

    $lastInsertedOrderID = $conn->lastInsertId();

    foreach ($cart as $item) {
        $sanphamID = $item['id'];
        $soluong = $item['quantity'];
        $dongiaban = $_POST['Gia'];

        $sqlInsertOrderDetail = "INSERT INTO donhang_chitiet (donhang_id, user_id, soluongban, dongiaban) VALUES (:donhang_id, :sanpham_id, :soluong, :dongiaban)";
        $stmtOrderDetail = $conn->prepare($sqlInsertOrderDetail);
        $stmtOrderDetail->bindParam(':donhang_id', $lastInsertedOrderID);
        $stmtOrderDetail->bindParam(':sanpham_id', $sanphamID);
        $stmtOrderDetail->bindParam(':soluong', $soluong);
        $stmtOrderDetail->bindParam(':dongiaban', $dongiaban);
        $stmtOrderDetail->execute();
    }


    unset($_SESSION['cart']);

    if (!isset($$_SESSION['cart'])) {
        header("Location: /cart/cart_empty.php");
        exit();
    } else {
        header("Location: /cart/cart_empty.php");
    }
} else {
    echo "Không có thông tin đơn hàng hoặc người dùng!";
}
