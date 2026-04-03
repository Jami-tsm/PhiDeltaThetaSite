<?php
// Get data from form  
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "pdt.newyorketa@gmail.com";

// The following text will be sent
// Name = user-entered name
// Email = user-entered email
// Message = user-entered message
$txt = "Name = " . $name . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;

$headers = "From: pdt.newyorketa@gmail.com" . "\r\n";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

// Redirect to
header("Location:last.html");
