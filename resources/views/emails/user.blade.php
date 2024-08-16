<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Thank You for Contacting Us</title>
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
            {{-- <img src="{{ asset('admin/assets/images/logo.png') }}" alt="Company Logo"
                style="max-width: 200px; height: auto;"> --}}
            <img src="https://drive.google.com/uc?export=view&id=16wUUPUF2oSc6N7TUP_-gP4GDt_wi7An9" alt="Company Logo"
                style="max-width: 100px; height: auto;">
            <h2>Thank You for Contacting Us</h2>
        </div>
        <div class="email-body">
            <p>Hello {{ $submission->name }},</p>
            <p>Thank you for reaching out to us. We have received your message and will get back to you as soon as
                possible.</p>
            {{-- <p><strong>Your Submission Details:</strong></p>
            <ul>
                <li><strong>Subject:</strong> {{ $submission->subject }}</li>
                <li><strong>Message:</strong> {{ $submission->message }}</li>
            </ul> --}}
            <p>Best regards,</p>
            <p>Bringingfx_Task</p>
        </div>
        <div class="email-footer">
            <p>&copy; {{ date('Y') }} Bridgingfx_Task. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
