<!DOCTYPE html>
<html>
<head>
    <title>Deposit Declined</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            color: #333;
        }
        .email-container {
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            margin: 40px auto;
            max-width: 600px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            text-align: center;
        }
        h2 {
            color: #e3342f;
        }
        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }
        .footer {
            margin-top: 20px;
            font-size: 13px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Company Logo -->
        <img src="logo.png" alt="Upward Saver Bank Logo" class="logo">

        <h2>Deposit Declined</h2>
        <p>{{ $messageContent }}</p>
        <p>If you believe this is an error, please contact support.</p>

        <div class="footer">
            &copy; 2025 Upward Saver Bank Corporation. All Rights Reserved.
        </div>
    </div>
</body>
</html>
