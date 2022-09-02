<?php
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_from = 'info@skillseekho.org';
$email_subject = 'New form Submission';
$email_body = "User name:$name.\n".
              "User email:$visitor_email.\n".
              "subject:$subject.\n".
              "User message:$message.\n";

$to = 'paramtomar81@gmail.com';

$headers = "From: $email_from\r\n";

$headers .= "Reply-To: $visitors_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>