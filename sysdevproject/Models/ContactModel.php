<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class Contact {
    static function sendMail() {
        
        $firstName = isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : '';
        $lastName = isset($_POST['last_name']) ? htmlspecialchars($_POST['last_name']) : '';
        $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : '';
        $email = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
        $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die('Invalid email format');
        }

        $mail = new PHPMailer(true);

        try {
            // Server Information
            $mail->isSMTP();
            $mail->SMTPAuth = true;

            $mail->Host = 'smtp.gmail.com';
            $mail->Username = 'sysdevproj69@gmail.com';
            $mail->Password = 'wmjcogrprrikolhh';

            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Recipient Information
            $mail->setFrom($email, "$firstName "." $lastName");
            $mail->addAddress('sysdevproj69@gmail.com');
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->isHTML(true);
            $mail->send();

            return true;
        } catch (Exception $e) {
            die("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }
}

?>