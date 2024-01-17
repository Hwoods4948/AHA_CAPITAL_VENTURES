<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["fname"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    $phone = $_POST["phone"]

    // Set up email parameters
    $to = "info@ahacapitalventures.online"; // replace with your Gmail address
    $subject = "Inquiry From Website";
    $message = "Name: $name\n Phone: $phone\n Email: $email\nComment: $comment";
    $headers = "From: $email";

    // Send email using mail() function
    $success = mail($to, $subject, $message, $headers);

    // Check if email is sent successfully
    if ($success) {
        echo json_encode(["Thanks For Contacting Us, We Will Get To You Shortly. " => true]);
    } else {
        echo json_encode(["success" => false]);
    }
} else {
    echo "Invalid request method.";
}

?>