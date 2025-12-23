<?php
// Get the feedback and email address from the form
$feedback = $_POST['feedback'];
$email = $_POST['email'];

// Set the recipient email address
$to = "mayuridorale8@gmail.com"; // Change this to your desired email address

// Set the email subject
$subject = "Feedback from $email";

// Compose the email message
$message = "Feedback: $feedback";

// Set additional headers
$headers = "From: $email" . "\r\n" .
           "Reply-To: $email" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

// Send the email
$mailSent = mail($to, $subject, $message, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo "Feedback sent successfully!";
} else {
    echo "Failed to send feedback. Please try again later.";
}
?>
