<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email']; // The sender's email
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Your email where the response will be sent
    $to = "your-email@example.com";  // Your email
    
    // Subject of the email to you
    $email_subject = "New Form Submission: " . $subject;

    // Message to you
    $email_body = "You have received a new message from the contact form.\n\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Phone: $phone\n\n".
                  "Message:\n$message";
    
    // Headers for email to you
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email to you
    $mail_sent = mail($to, $email_subject, $email_body, $headers);

    // Now send a confirmation email to the sender
    $user_subject = "Copy of your form submission: " . $subject;

    // Message to the user
    $user_message = "Dear $name,\n\n".
                    "Thank you for getting in touch. Here is a copy of your submission:\n\n".
                    "Name: $name\n".
                    "Email: $email\n".
                    "Phone: $phone\n\n".
                    "Message:\n$message\n\n".
                    "We will get back to you soon!";
    
    // Headers for email to user
    $user_headers = "From: your-email@example.com\r\n";
    
    // Send confirmation email to the user
    $user_mail_sent = mail($email, $user_subject, $user_message, $user_headers);

    // Notify the sender if both emails were successfully sent
    if ($mail_sent && $user_mail_sent) {
        echo "Thank you, $name. Your message has been sent, and a copy has been emailed to you.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
