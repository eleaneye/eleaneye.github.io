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

<body>
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
    ?>

</body>

</html>