<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email settings
    $to = "jirukeh@gmail.com";
    $subject = "Contact Form Submission";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "
        <div style='background-color: #FF9800; color: white; padding: 20px; font-family: Arial, sans-serif; border-radius: 8px; text-align: center;'>
            <h2>Message Sent Successfully!</h2>
            <p>Thank you, <strong>$name</strong>, for reaching out. We'll get back to you soon.</p>
        </div>";
    } else {
        echo "
        <div style='background-color: black; color: white; padding: 20px; font-family: Arial, sans-serif; border-radius: 8px; text-align: center;'>
            <h2>Error Sending Message</h2>
            <p>Please try again or contact us directly at <strong>$to</strong>.</p>
        </div>";
    }
}
?>
