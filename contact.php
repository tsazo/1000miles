<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $subject = $_Post['subject'];
    $message = $_Post['message'];

    $email_from = 'Donation website!!';

    $email_subject = "$subject";

    $email_body = "Name: $name.\n Email: $visitor_email.\n Message: $message\n";

    $to = 'trinitysazo@gmail.com';

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body,$headers);

    header("Location: contact.html");
 ?>
