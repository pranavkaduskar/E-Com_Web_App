<?php 

require_once 'db_config.php';

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];



$sql = "UPDATE `users` SET `name` = '$name', `email` = '$email', `username` = '$username', `password` = '$password' WHERE `users`.`id` = $id;";

if (mysqli_query($conn,$sql)) {
    header("Location:umanagement.php");
} else {
    echo "something went wrong";
}


mysqli_close($conn);



?>