<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "ssl://smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "deliverindoor.contact";
    $mail->Password = "Deliverindoor1!";
    $mail->From = "d.bertorello.0415@vallauri.edu";
    $mail->FromName = "Deliverindoor";
    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['text'];
    $mail->AddAddress("deliverindoor.contact@gmail.com");
    $mail->addReplyTo($_POST['address']);
    $mail->WordWrap = 50;

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message has been sent";
    }
?>