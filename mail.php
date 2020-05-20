<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

$content="DE: $name \n Correo: $email \n Asunto: $subject \n Mensaje: $message";
$recipient = "cotizaciones@taquizas-sasoon.com.mx";
$mailheader = "De: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "<script type='text/javascript'>window.location.href='http://taquizas-sasoon.com.mx/gracias.html';</script>";?>