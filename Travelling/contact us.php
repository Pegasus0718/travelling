<?php
    $ name=$_POST['fname'];
$lname=$_POST['lname'];
$message=$_POST['subject'];
$visitor_email=$_POST['email'];

$email_from='aguleria221@gmail.com';
$email_subject="New form submission";
$email_body="user name: $name. \n".
             "user Email:$visitor_email.\n".
              "user message:$message.\n ";
$to="guleraiabhay1@gmail.com";
$headers="From: $email_from\r\n";
$headers.="Reply-To:$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:contact us.html");
?>