<?php
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$comment = $_POST['comment'];
if (isset($_POST['submit'])) {
    // Check if name has been entered
    if (empty($_POST['first'])) {
        $errName = 'Please enter your name';
    }
    // Check if email has been entered and is valid
    else if (empty($_POST['email'])) {
        $errEmail = 'Please enter a valid email address';
    }
    // check if a password has been entered 
    else if (empty($_POST['comment'])) {
        $errPass = 'Please enter message';
    } else {
        $recipient="eleaneye21@gmail.com";
        $subject="BEEP BOOP";
        $sender= $first + $last;
        $senderEmail=$email;
        $message=$comment;

        $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
        mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

        echo "The form has been submitted";
    }
}
