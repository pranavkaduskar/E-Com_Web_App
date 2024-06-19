<?php 
require_once 'db_config.php';
session_start();

if (!isset($_SESSION['aname'])) {
    header("Location: login.html");
    
}

$name=$_POST["name"];
$descrip=$_POST["descrip"];
$mrp=$_POST["mrp"];
$sp=$_POST["sp"];
$image = $_FILES['image']['name'];


$target_dir = "DisplayProducts/";
$target_file = $target_dir . basename( $_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$target_file);




$sql = "INSERT INTO `product` (`id`, `name`, `descrip`, `mrp`, `sp`, `image`) VALUES (NULL, '$name', '$descrip', '$mrp', '$sp', '$image');";


if (mysqli_query($conn,$sql)) {
     header("Location:pmanagement.php");

} else {
    echo "Something went wrong";
}

mysqli_close($conn);




?>