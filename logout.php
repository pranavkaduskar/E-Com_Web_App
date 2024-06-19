<?php

session_start();
if(isset($_SESSION['uname'])){
    session_destroy();
    header("Location:login.html") . mysqli_errno();
}
else{
    header("Location: index.html");
}

?>