<?php
// form handler
if ($_POST && isset($_POST['submit'])) {

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $name = $first + $last;

    if (!$first) {
        $errorMsg = "Please enter your Name";
    } elseif (!$email || !preg_match("/^\S+@\S+$/", $email)) {
        $errorMsg = "Please enter a valid Email address";
    } elseif (!$comment) {
        $errorMsg = "Please enter your comment in the Message box";
    } else {
        // send email and redirect
        $to = "eleaneye21@gmail.com";
        if (!$subject) $subject = "Contact from website";
        $headers = "From: webmaster@example.com" . "\r\n";
        mail($to, $subject, $message, $headers);
        echo "Thank you";
    }
}
