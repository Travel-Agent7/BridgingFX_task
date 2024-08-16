<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .email-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        .email-header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #dddddd;
        }

        .email-body {
            padding-top: 20px;
        }

        .email-footer {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #dddddd;
            font-size: 12px;
            color: #777777;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <h2>New Contact Form Submission</h2>
        </div>
        <div class="email-body">
            <p>Hello Admin,</p>
            <p>A new contact form submission has been received. Here are the details:</p>
            <ul>
                <li><strong>Name:</strong> {{ $submission->name }}</li>
                <li><strong>Email:</strong> {{ $submission->email }}</li>
                <li><strong>Subject:</strong> {{ $submission->subject }}</li>
                <li><strong>Message:</strong> {{ $submission->message }}</li>
            </ul>
            <p>Please review and take the necessary action.</p>
        </div>
        <div class="email-footer">
            <p>&copy; {{ date('Y') }} Bridgingfx_Task. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
