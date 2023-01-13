<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
 
$email_from = 'info@aspenmabati.co.ke'

$email_subject = 'New Frm Submisson'

$email_body = "user Name: $name.\n". 
                "user Name: $visitor_email.\n".
                 "subject: $subject.\n".
                "user message: $message.\n";

$to = 'info@aspenmabati.co.ke.com';

$headers = "from: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>