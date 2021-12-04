<?php
include"PHPMailer/src/PHPMailer.php";
include"PHPMailer/src/Exception.php";
include"PHPMailer/src/OAuth.php";
include"PHPMailer/src/POP3.php";
include"PHPMailer/src/SMTP.php";
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;   

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'hoangnam2210ptit@gmail.com';                 // SMTP username
    $mail->Password = 'njdynsgeswiwtbah';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('hoangnam2210ptit@gmail.com', 'Tobe Baby Store');
    $mail->addAddress('namle.22102000@gmail.com', 'Nam');     // Add a recipient
   
 
   
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Email Confirm';
    $mail->Body    = 'Đây là email xác nhận đơn hàng';
   
 
    $mail->send();
    echo 'Message has been sent <a href="custommer.php">Quay lại</a>';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
