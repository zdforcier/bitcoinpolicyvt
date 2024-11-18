<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }
    
    $to = "zachtunes89@gmail.com";
    $headers = "From: " . $email . "\r\n" . "Reply-To: " . $email;
    $full_message = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
    // Send email
    if (mail($to, $subject, $full_message, $headers)) {
        header("Location: email.html");
        exit();
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
