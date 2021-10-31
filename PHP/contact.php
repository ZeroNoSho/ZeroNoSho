<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $message = $_POST['massage'];

    $mailto = "inukuro351@gmail.com";
    $headers = "From: ".$mailfrom;
    $txt = "You Have Received an e-mail from ".$name.".\n\n".$message;

    mail($mailto, $txt, $headers);
    header("Location: contact.html?mailsend");
}