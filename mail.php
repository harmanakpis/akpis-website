<?php
$to = "harman.akpis@gmail.com"; // Change this to your email address
$subject = "Test Mail from PHP";
$message = "Hello! This is a test email sent using the PHP mail() function.";


if (mail($to, $subject, $message)) {
    echo "Mail sent successfully to $to";
} else {
    echo "Mail sending failed.";
}
?>



