<?php
$to = 'oscar.di@me.com';
$subject = 'Test Email';
$message = 'This is a test email to check if the PHP mail function is working.';
$headers = 'From: test@example.com';

if (mail($to, $subject, $message, $headers)) {
    echo 'success';
} else {
    echo 'error';
}
?>
