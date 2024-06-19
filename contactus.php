		
<?php
// session_start();

// if (!isset($_SESSION['uname'])) {
//     header("Location: login.html");
    
// }else{
//     header("Location:contactus.php");
// }
require_once 'db_config.php';

$name = $_POST["name"];
$uname = $_POST["uname"];
$uemail = $_POST["uemail"];
$message = $_POST["message"];

session_start();

// $_SESSION["uname"]=$uname;










$sql = "INSERT INTO `usersquery` (`id`, `name`, `email`, `username`, `message`,`replay`) VALUES (NULL, '$name', '$uemail', '$uname', '$message',NULL);";
// if (!isset($_SESSION['uname'])) {
//     header("Location: login.html");}


if (!isset($_SESSION['uname'])) {
    header("Location: login.html");
}else{
if (mysqli_query($conn,$sql)) {
    # code... 
    header("Location: thankyouq.html");
} else {
    # code...
    echo "something went worng";
}
}
mysqli_close($conn);


?>