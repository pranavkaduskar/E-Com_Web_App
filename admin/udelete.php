<?php 

$id = $_GET["id"];

require_once 'db_config.php';

$conn = mysqli_connect($servername,$username,$password,$dbname);



$sql = "DELETE FROM `users` WHERE id = $id";


if (mysqli_query($conn,$sql)) {
    header("Location:umanagement.php");
} else {
    echo "Something went wrong";
}

mysqli_close($conn);

?>