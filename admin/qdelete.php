<?php 

require_once 'db_config.php';

$id = $_GET["id"];


$sql = "DELETE FROM `usersquery` WHERE id = $id";


if (mysqli_query($conn,$sql)) {
    header("Location:querymange.php");
} else {
    echo "Something went wrong";
}

mysqli_close($conn);

?>