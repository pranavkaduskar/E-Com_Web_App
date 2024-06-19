<?php

require_once 'db_config.php';
$name = $_POST["aname"];

$pas = $_POST["pass"];


session_start();
$_SESSION['aname']=$name;





$sql = "SELECT * FROM `blasianadmins` WHERE `adminname` = '$name' and `pass` = '$pas';";
$result = mysqli_query($conn,$sql);
if(isset($_SESSION['aname'])){
    header("Location: index.html");
}else{
if (mysqli_num_rows($result)>0) {
    # code... 

    header("Location:index.html");
} else {
    # code...
   echo " Invalid User Name or Password. Pleas try again";
}
}
mysqli_close($conn);
?>