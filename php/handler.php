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
        $recipient = "eleaneye21@gmail.com";
        $subject = "BEEP BOOP";
        $sender = $first + $last;
        $senderEmail = $email;
        $message = $comment;

        $mailBody = "Name: $sender\nEmail: $senderEmail\n\n$message";
        mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

        echo "The form has been submitted";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Eleane Ye</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Inconsolata'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src='js/jquery-3.5.0.min.js'></script>
    <script src="js/form.js"></script>
</head>
<body></body>

</html>