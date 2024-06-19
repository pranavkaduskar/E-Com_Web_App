<?php
require_once 'db_config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['id'];
    $name = $_POST['name'];
    $descrip = $_POST['descrip'];
    $mrp = $_POST['mrp'];
    $sp = $_POST['sp'];
    $image = $_POST['image'];

    $updateSql = "UPDATE `product` SET
                  `name` = '$name',
                  `descrip` = '$descrip',
                  `mrp` = '$mrp',
                  `sp` = '$sp',
                  `image` = '$image'
                  WHERE `id` = $productId";

    if (mysqli_query($conn, $updateSql)) {
       
        header("Location: pmanagement.php"); // Redirect back to product management page
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request";
}

mysqli_close($conn);
?>
