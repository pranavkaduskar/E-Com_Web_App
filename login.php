<?php

require_once 'db_config.php';

$username = $_POST['uname'];
$password = $_POST['pass'];


session_start();

$_SESSION['uname']=$username;


$sql = "SELECT * FROM `users` WHERE `username`= '$uname' and `password`= '$pas';";
$result = mysqli_query($conn,$sql);
if(isset($_SESSION['uname'])){
    header("Location: index.html");
}else{
if (mysqli_num_rows($result)>0) {
    # code... 

    header("Location:index.html");
} else {
    # code...
    header("Location:error.html");

}
}
mysqli_close($conn);
?>