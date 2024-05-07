<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

$to = 'andreipalaghiade@gmail.com';
$subject = 'New Contact Form Submission';
$body = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nMobile No.: $mobile\nMessage:\n$message";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (mail($to, $subject, $body)) {
        echo 'Message successfully sent!';
    } else {
        echo 'There was a problem sending the message.';
    }
}
?>