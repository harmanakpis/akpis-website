<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer directly from your CodeIgniter folder
require_once('app/Libraries/mailer/src/Exception.php');
require_once('app/Libraries/mailer/src/PHPMailer.php');
require_once('app/Libraries/mailer/src/SMTP.php');

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp-relay.brevo.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'iamcashammi@gmail.com'; // Your Brevo login
    $mail->Password   = 'tnRQrEOMdpTYmvsw';      // Your Brevo SMTP key
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->SMTPDebug  = 2; // Verbose debug output
    $mail->Debugoutput = 'html';

    // Recipients
    $mail->setFrom('iamcashammi@gmail.com', 'AKPIS');
    $mail->addAddress('harmankaur0507@gmail.com'); // receiver

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Mail from Brevo SMTP';
    $mail->Body    = '<h3>Mail test success ✅</h3><p>This email is sent via Brevo SMTP immediately.</p>';
    $mail->AltBody = 'Mail test success';

    $mail->send();
    echo '✅ Mail sent successfully!';
} catch (Exception $e) {
    echo "❌ Message could not be sent. Error: {$mail->ErrorInfo}";
}
