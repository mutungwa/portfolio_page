<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create email content
    $to = "Mutungwakelvin@gmail.com";  // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $emailContent = "Name: $name\n";
    $emailContent .= "Email: $email\n";
    $emailContent .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Thank you for your message. We will get back to you soon!";
    } else {
        echo "Error sending the message. Please try again later.";
    }
}
?>
