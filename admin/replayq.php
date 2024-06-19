<?php 
// require_once 'db_config.php';
require_once 'db_config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$name = $_POST["name"];
$uname = $_POST["username"];
$uemail = $_POST["email"];
$message = $_POST["password"];

$id = $_POST["id"];
$ans = $_POST["replay"];



$sql = "UPDATE `usersquery` SET  `replay` = '$ans' WHERE `usersquery`.`id` = $id;";

if (mysqli_query($conn,$sql)) {
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
        $mail->addAddress($uemail, $uname);     //Add a recipient
        //$mail->addAddress('pranavkaduskar8@gmail.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        // //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Query Replay ';
        $mail->Body    = " $ans <br> <b>Thanks</b>";
        $mail->AltBody = 'hello You are sucessfully registered our Blasian brand.';
    
        $mail->send();
        header("Location: querymange.php");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
        
    } else {
        # code...
        echo "error.html";
    }


?>
