<?php
require_once 'db_config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


$name = $_POST["name"];
$uname = $_POST["uname"];
$uemail = $_POST["uemail"];
$pas = $_POST["pass"];



$sql = "INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`) VALUES (NULL, '$name', '$uemail', '$uname', '$pas');";
if (mysqli_query($conn,$sql)) {
    # code... 
   
try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'pranavkaduskar8@gmail.com';                     //SMTP username
    $mail->Password   = 'fqkt yorr yxti svlu';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($uemail,$name);
    $mail->addAddress('panyakaduskar@gmail.com', 'panya User');     //Add a recipient
    //$mail->addAddress('pranavkaduskar8@gmail.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Welcome to Blasian ';
    $mail->Body    = 'hello You are sucessfully registered our Blasian brand. <br> <b>Welcome</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header("Location: login.html");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    
} else {
    # code...
    echo "error.html";
}
mysqli_close($conn);
?>
