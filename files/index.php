<?php
require_once 'vendor/autoload.php'; // Include Swift Mailer library

// Create a Swift Mailer transport (SMTP or other)
$transport = new Swift_SmtpTransport('smtp.example.com', 587, 'tls');
$transport->setUsername('your_username');
$transport->setPassword('your_password');

// Create the mailer instance
$mailer = new Swift_Mailer($transport);

// Compose the email
$message = (new Swift_Message('Verify your email address'))
    ->setFrom('webmaster@example.com')
    ->setTo($email)
    ->setBody('Click the link to verify your email: https://example.com/verify?token=' . $activationToken, 'text/html');

// Send the message
$result = $mailer->send($message);
?>
