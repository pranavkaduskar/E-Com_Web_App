<?php
// buyproduct.php

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Now you can add the product to the cart or perform any other actions
    // For example, you can store the product ID in a session variable
    session_start();

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Add the product ID to the cart
    $_SESSION['cart'][] = $productId;

    // Redirect to the cart page
    header('Location: cart.php');
    exit();
} else {
    // Handle the case where 'id' is not set
    echo "Invalid product ID.";
}
?>
