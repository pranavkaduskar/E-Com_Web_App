<?php 
require_once 'db_config.php';
$id = $_GET["id"];

$sql = "DELETE FROM `product` WHERE id = $id";


if (mysqli_query($conn,$sql)) {
    header("Location:pmanagement.php");
} else {
    echo "Something went wrong";
}

mysqli_close($conn);

?>