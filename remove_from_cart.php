<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['id'];

    if (!isset($_SESSION['cart'])) {
        echo 'Cart is empty';
    } else {
        // Search for the product ID in the cart and remove it
        $index = array_search($productId, $_SESSION['cart']);
        if ($index !== false) {
            array_splice($_SESSION['cart'], $index, 1);
            echo 'Product removed from cart successfully';
        } else {
            echo 'Product not found in cart';
        }
    }
} else {
    echo 'Invalid request';
}
?>
