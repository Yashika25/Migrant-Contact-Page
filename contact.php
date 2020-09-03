<?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $email_from = "Yashika Kalra";
    $email_subject = "New Mail From Contact Form";
    $email_body =   "name: $name.\n".
                    "email: $email.\n".
                    "phone: $phone.\n".
                    "message: $message. \n";

    $to = 'y.colkalra100@gmail.com';
    $headers = "FROM: $email_from \r\n";
    $headers = "REPLY-TO: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: https://yashika25.github.io/Migrant-Contact-Page/");

?>
