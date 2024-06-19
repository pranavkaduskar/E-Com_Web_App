
<?php
session_start();

// Debugging: Output the value of $_GET['id']
echo "Product ID from GET: " . $_GET['id'];

// ... rest of the code ...



// Check if product ID is provided in the request
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $productId = $_GET['id'];

    // Connect to your database (replace with your database credentials)
    $conn = mysqli_connect("localhost", "root", "", "blasian");

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Fetch product details based on the provided ID
    $sql = "SELECT * FROM `product` WHERE `id` = $productId";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);

        // Add the product to the cart in the session
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

        // If the product is already in the cart, increase the quantity
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += 1;
        } else {
            // Otherwise, add a new entry to the cart
            $cart[$productId] = [
                'name' => $product['name'],
                'price' => $product['sp'],  // Assuming 'sp' is the selling price
                'quantity' => 1,
            ];
        }

        $_SESSION['cart'] = $cart;

        // Redirect back to the product details page or wherever you want
        header("Location: cart.php?id=$productId");
        exit();
    } else {
        echo "Product not found.";
    }

    mysqli_close($conn);
} else {
    echo "Invalid product ID.";
}
?>
