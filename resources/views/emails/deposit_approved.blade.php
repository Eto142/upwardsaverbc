<!DOCTYPE html>
<html>
<head>
    <title>Deposit Approved</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            color: #333;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            max-width: 600px;
            margin: 40px auto;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .footer {
            margin-top: 20px;
            font-size: 13px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Deposit Approved 🎉</h2>
        <p>{{ $messageContent }}</p>

        <div class="footer">
            If you have any questions, feel free to reply to this email.<br>
            Thank you for using our platform.
        </div>
    </div>
</body>
</html>
