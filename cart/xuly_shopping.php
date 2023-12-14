<?php

require_once '../config.php';

if (isset($_POST['IdTour'])) {
    $id = $_POST['IdTour'];

    $sqlTourChiTiet = "SELECT * FROM tours WHERE ID = :id";
    $cmdTourChiTiet = $conn->prepare($sqlTourChiTiet);
    $cmdTourChiTiet->bindParam(':id', $id);
    $cmdTourChiTiet->execute();
    $product = $cmdTourChiTiet->fetch(); 
    
    if ($product) {
        $productInfo = array(
            'id' => $product['ID'],
            'name' => $product['TieuDe'],
            'price' => $product['Gia'],
            'quantity' => 1,
            'hinhanh' => $product['HinhAnh']
        );
        
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['id'] == $product['ID']) { 
                    $_SESSION['cart'][$key]['quantity']++;
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                array_push($_SESSION['cart'], $productInfo);
            }
        } else {
            $_SESSION['cart'] = array($productInfo);
        }

        header("Location: /cart/cart.php");
        exit();
    } else {
        echo "Không tìm thấy sản phẩm!";
    }
} else {
    echo "Không có dữ liệu được gửi!";
}
?>
