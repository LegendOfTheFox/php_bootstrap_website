<?php
    ob_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $page_title = null;
    $page_title = "Sending your message";

    $name = $_POST['inputName'];
    $email = $_POST['inputEmail'];
    $message = $_POST['inputMessage'];

    $email_message = "<h1>Name: " . $name . "</h1> <h2>Email: " . $email . "</h2> <p> Message: " . $message . "</p>";
    $email_subject = "New Contact Request";
    
    //Logic for sending a email from the contact page using PHPMailer
    $mail = new PHPMailer(true);
    try{
        $mail->SMTPDebug = 2;

        //enable SMTP
        $mail -> isSMTP();
        $mail -> Mailer = "smtp";
        //bypass certificate issues with Gmail
        $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );

        //Set authentication to true
        $mail -> SMTPAuth = true;
        //set login details for gmail account
        $mail->Username = 'XXXXXX';
        $mail->Password = 'XXXXX';

        //set type of protection
        $mail->SMTPSecure = 'tls';
        //set the host
        $mail->Host = 'smtp.gmail.com';
        //set a port 587 for tls / 465 ssl
        $mail->Port = '587';
        
        $mail->Host = 'tls://smtp.gmail.com:587';
        //set subject
        $mail->Subject = $email_subject;
        //set body
        $mail->Body = $email_message;
        //set who is sending an email
        $mail->setFrom('XXXXXX', 'Mailer');
        //set where we are sending email
        $mail->AddAddress('XXXXXX');
        //send an email
        $mail->isHTML(true);
        //send the message
        $mail->Send();
    }
    catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

        header('location:contact.php');

    ob_flush();
?>