<?php
$emailSent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // reCAPTCHA validation
    $secretKey = "6Le4_zcpAAAAAP7Lfx2lEFWIeGjDfC2ULkN4sOM-"; // Replace with your actual secret key
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $responseKey . "&remoteip=" . $userIP;
    $response = file_get_contents($url);
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        echo 'reCAPTCHA validation failed. Please try again.';
        exit; // Stop script execution if reCAPTCHA fails
    }

    // reCAPTCHA validated, continue processing form submission

    // Collect and sanitize input data
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $phone = htmlspecialchars(stripslashes(trim($_POST['phone'])));
    $street = htmlspecialchars(stripslashes(trim($_POST['street'])));
    $city = htmlspecialchars(stripslashes(trim($_POST['city'])));
    $state = htmlspecialchars(stripslashes(trim($_POST['state'])));
    $message = htmlspecialchars(stripslashes(trim($_POST['message'])));

    // Specify your email address
    $to = 'info@callbillsheating.com';
    $subject = 'New Estimate Request';

    // Create the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Street: $street\n";
    $body .= "City: $city\n";
    $body .= "State: $state\n";
    $body .= "Message: $message";

    // Headers
    $headers = "From: noreply@callbills.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo 'success';
    } else {
        echo 'error';
    }
    exit; // Important to stop script execution after sending response
}
?>
