

php

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $to = "musajoacademicwritingservices@gmail.com"; 
    $subject = "New Contact Form Submission";
    $message = "Name: $name\nEmail: $email";
    $headers = "From: noreply@example.com";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Form submitted successfully!";
    } else {
        echo "Failed to send email.";
    }
}

?>