<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mailTO = "info@dj-ara.de";
    $headers = "From: $mail";
    $txt = "You have received a message from ". $name.".\n\n".$message;

    mail($mailTO, $subject, $txt, $headers);
}
?>
