<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email']; // User's email
    $message = $_POST['message'];

    // Email that you want to receive the form submission
    $to = "swenzelphotography@gmail.com"; // Replace with your own email

    // Email to the form user
    $userEmail = $email;

    // Subject for your email
    $subject = "New Contact Form Submission from " . $name;

    // Message content for your email
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    // Headers for your email
    $headers = "New Form Submission from $name";

    // Send email to you
    $mailToYou = mail($to, $subject, $body, $headers);

    // Subject for the user's confirmation email
    $userSubject = "Thank you for contacting me, " . $name;

    // Message content for the user's email
    $userBody = "Dear $name,\n\n";
    $userBody .= "Thank you for reaching out! Here's a copy of your message:\n\n";
    $userBody .= "Message:\n$message\n\n";
    $userBody .= "I will get back to you soon!\n\n";
    $userBody .= "Best regards,\nStephen Wenzel";

    // Headers for the user's email (you can set this to be from your company's email)
    $userHeaders = "New Form Submission - Stephen Wenzel Photography"; // Replace with your "From" email

    // Send confirmation email to the user
    $mailToUser = mail($userEmail, $userSubject, $userBody, $userHeaders);

    // Check if both emails were sent successfully
    if ($mailToYou && $mailToUser) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
