<?php

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $package = $_POST['package'];
    $description = $_POST['description'];

    $subject = "Commission Request";

    $mailTo = "truetapping@gmail.com";
    $headers = "From: ".$email;
    $text = "You have received an e-mail from ".$firstname." ".$lastname.".\n\n"."The package they want is: ".$package.".\n\n"."Description of what they want: ".$description;

    mail($mailTo, $subject, $text, $headers);
    header("Location: commissions.html?mailsend");
}