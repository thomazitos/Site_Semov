<?php
$name = @trim(stripslashes($_POST['name'])); 
$from = @trim(stripslashes($_POST['email'])); 
$subject = @trim(stripslashes($_POST['subject'])); 
$message = @trim(stripslashes($_POST['message'])); 
$to = "academico.cam@gmail.com";

$mensaje = "Nome: $name \nEmail: $from \nAssunto: $subject \nMensagem: $message";

$pagetitle = "Nova mensagem do site";

$headers = "From:" . $from;

mail($to, $pagetitle, $mensaje, $headers);

die();