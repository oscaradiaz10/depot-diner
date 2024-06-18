<?php
$form_name = $_POST['name'];
$form_email = $_POST['email'];
$form_phone = $_POST['phone'];
$form_message = $_POST['message'];
$formcontent=" From: $form_name \n Email: $form_email \n Phone: $form_phone \n Message: $form_message";
$recipient = "oscar.di@me.com";
$subject = "Depot Diner General Contact Form";
$mailheader = "From: $form_email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>