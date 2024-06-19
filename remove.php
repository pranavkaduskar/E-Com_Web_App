

<?php
session_start();

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $productId = $_GET['id'];

    // Retrieve the cart from the session
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

    // Remove the product with the specified ID from the cart
    if(isset($cart[$productId])) {
        unset($cart[$productId]);
        $_SESSION['cart'] = $cart;
    }
}

// Redirect back to cart.php after removal
header('Location: cart.php');
exit();

// Redirect to the cart page if the product ID is not valid or if the product is not in the cart
echo "Not Found";
header("Location: cart.php");
exit();

?>
