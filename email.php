<?php
require_once('email/src/Exception.php');
require_once('email/src/SMTP.php');
require_once('email/src/PHPMailer.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

if(isset($_POST['submit'])) {
    $emailData['name'] = $_POST['name'];
    $emailData['email'] = $_POST['email'];
    $emailData['subject'] = $_POST['subject'];
    $emailData['message'] = $_POST['message'];

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
    
        $mail->Host = 'gauntlet.asoshared.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'cybro@interimmanagement.com.br';
        $mail->Password = 'GJ_?n7Ims2Xw';
        $mail->Port = 465;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    
        $mail->setFrom('cybro@interimmanagement.com.br');
        $mail->addAddress('interim.management@grupopanna.com.br');
    
        $mail->isHTML(true);
        $mail->Subject = 'Mensagem enviada pelo site';
        $mail->Body = '<b>Nome: </b>' . $emailData['name'] . '<br>'
        . '<b>Email: </b>' . $emailData['email'] . '<br>'
        . '<b>Assunto: </b>' . $emailData['subject'] . '<br>'
        . '<b>Mensagem: </b>' . $emailData['message'] . '<br>';
    
        if ($mail->send()) header('Location: http://interimmanagement.com.br/contact.php?email=true');
        else header('Location: http://interimmanagement.com.br/contact.php?email=false');
    } catch (\Exception $e) {
        header('Location: http://interimmanagement.com.br/contact.php?email=false');
    }
} else {

}
