<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "inukuro351@gmail.com";

    $subject = "New Form Submission";

    $txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message;
    
    $headers = "From: babi6222@gmail.com" . "\r\n" .

    if($email!=NULL){
        mail($to,$email_subject,$email_body,$headers);
    }

    header(Location: contact.html);

?>