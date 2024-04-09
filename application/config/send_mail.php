<?php

//// Initialize PHPMailer
//require 'PHPMailer/PHPMailer.php';
//require 'PHPMailer/SMTP.php';
//require 'PHPMailer/Exception.php';
//
//$mail = new PHPMailer();
//$mail->isSMTP();
//$mail->Host = 'smtp.gmail.com';
//$mail->Port = 587;
//$mail->SMTPAuth = true;
//$mail->Username = 'contact@dynamic-co.com';
//$mail->Password = '3Mb#{g@lEqg$';
//$mail->setFrom('your_email@gmail.com', 'Your Name');
//$mail->addAddress('info@dynamic-co.com', 'Recipient Name');
//$mail->Subject = 'Email from PHPMailer';
//$mail->Body = 'This is an email sent from PHPMailer.';
//
//if ($mail->send()) {
//echo 'Email sent successfully!';
//} else {
//echo 'Error sending email: ' . $mail->ErrorInfo;
//}

?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = 0;                                 
    $mail->isSMTP();                                      
    $mail->Host = 'https://dynamic-co.com/';  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'contact@dynamic-co.com';                 
    $mail->Password = '3Mb#{g@lEqg$';                           
    $mail->SMTPSecure = 'ssl';                            
    $mail->Port = 587;                                    

    //Recipients
    $mail->setFrom('contact@dynamic-co.com');
    $mail->addAddress('info@dynamic-co.com');     

    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];
    
if ($mail->send()) {
echo 'Email sent successfully!';
} else {
echo 'Error sending email: ' . $mail->ErrorInfo;
}

?>