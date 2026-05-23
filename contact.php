<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(['type' => 'danger', 'message' => 'Please complete the form and provide a valid email.']);
        exit;
    }

    // Recipient Email (Change this to your own email address)
    $to = "coffeewithgarvit@gmail.com";
    $subject = "New Contact from $name";

    // Email Content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Email Headers (Important: For reliable delivery, use an email address hosted on your website's domain, e.g., contact@yourdomain.com)
    $headers = "From: contact@isthismyportfolio.site\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send Email
    if (mail($to, $subject, $email_content, $headers)) {
        http_response_code(200);
        echo json_encode(['type' => 'success', 'message' => 'Thank you! Your message has been sent.']);
    } else {
        http_response_code(500);
        echo json_encode(['type' => 'danger', 'message' => 'Something went wrong, and we couldn\'t send your message.']);
    }
} else {
    http_response_code(403);
    echo json_encode(['type' => 'danger', 'message' => 'There was a problem with your submission.']);
}
?>
