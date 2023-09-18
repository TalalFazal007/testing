<?php
ini_set("SMTP", "smtp.gmail.com");
ini_set("smtp_port", "587");
ini_set("sendmail_from", "m33rtalal@gmail.com");
ini_set("sendmail_path", "/usr/sbin/sendmail -t -i");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set up email parameters
    $to = "m33rtalal@gmail.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to a thank-you page
        header("Location: contact.html");
    } else {
        echo "Error sending email. Please try again later.";
    }
} else {
    // Handle invalid form submission
    echo "Invalid request.";
}
?>
