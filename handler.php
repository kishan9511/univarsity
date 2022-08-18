<?php
$name=$_post['name'];
$visitor_email=$_post['email'];
$subject=$_post['subject'];
$message=$_post['message'];  

$email_from ='hpkishan0@gmail.com';

$email_subject = 'New Form Submission';

$email_body =  "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message:$message.\n";
  
               
   $to = 'kv15142@gmail.com';

   $headers ="From: $from_email\r\n";

   $headers ="reply-to: $visitor_email\r\n";

   mail($to,$email_subject,$email_body,$headers);

   header("location:contact.html");

?>