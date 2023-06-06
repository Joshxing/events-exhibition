<?php
require './vendor/autoload.php';

// Retrieve the form data
$name = $_POST['name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];

// Instantiate a new PHPMailer object
$mail = new PHPMailer;

// Set up SMTP credentials and settings
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'kerzjhon1@gmail.com'; // Replace with your Gmail email address
$mail->Password = 'hacked123456'; // Replace with your Gmail password

// Set the 'From' and 'To' email addresses
$mail->setFrom('cabalsejoshua16@gmail.com', 'Joshua Cabalse');
$mail->addAddress('cabalsejoshua16@gmail.com'); // Replace with the recipient's email address

// Set the email subject and body
$mail->Subject = 'New form submission from your website';
$mail->Body = "Name: $name\nLast Name: $lastName\nEmail: $email";

// Send the email
if ($mail->send()) {
    // Email sent successfully, redirect the user
    header('Location: https://eventsandexhibitions.us');
} else {
    echo 'Error: ' . $mail->ErrorInfo;
}
