<?php

include_once '../navbar.php';

if (isset($_POST['delete_item'])) {
    $item_index = $_POST['item_index'];
    if (isset($_SESSION['cart'][$item_index])) {
        unset($_SESSION['cart'][$item_index]); 
    }
    if(isset($$_SESSION['cart'])){
        header("Location: /cart/cart.php");
        exit();
    }
    else{
        header("Location: /cart/cart_empty.php");
        exit();
    }
}
?>
