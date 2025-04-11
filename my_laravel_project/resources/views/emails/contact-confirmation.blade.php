<!DOCTYPE html>
<html>
<head>
    <title>Contact Confirmation</title>
</head>
<body>
    <h1>Thank You for Your Message!</h1>
    <p>Hi {{ $contactMessage->name }},</p>
    <p>Thank you for reaching out to us. We have received your message and will get back to you shortly.</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contactMessage->message }}</p>
    <p>Best regards,</p>
    <p>Your Company</p>
</body>
</html>
