<?php
ob_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $message = trim($_POST["message"]);

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'youremail@gmail.com';
        $mail->Password = 'Your Gmail Account App Password';
        // $mail->Password = 'mckj osmb wfms csqh';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('youremail@gmail.com', 'Your Name Here');
        $mail->addAddress('youremail@gmail.com');

        $mail->isHTML(false);
        $mail->Subject = "New Contact Form Submission from $name";
        $mail->Body    = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

        $mail->send();
        echo "Thank you for your message. We will get back to you soon!";
    } catch (Exception $e) {
        echo "Sorry, something went wrong. Please try again.";
    }
} else {
    echo "Invalid request.";
}
ob_end_flush();
?>