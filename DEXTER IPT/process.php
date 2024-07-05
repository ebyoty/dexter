<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Process form data here (e.g., save to a database, send an email)
    // For this example, we'll just display a message.

    echo "<h1>Thank you, $name!</h1>";
    echo "<p>We have received your message and will get back to you at $email.</p>";
    echo "<p>Your message: $message</p>";
}
?>