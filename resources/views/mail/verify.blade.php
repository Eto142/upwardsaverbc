<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Upward Saver</title>
    <style>
        /* Reset */
        body, h1, h2, p, ul, li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            max-width: 200px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .content {
            text-align: center;
            margin-bottom: 30px;
        }

        .content h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .content h2 {
            font-size: 20px;
            font-weight: normal;
            color: #555;
            margin-bottom: 15px;
        }

        .content p {
            margin-bottom: 10px;
            color: #555;
            font-size: 16px;
        }

        .activation-code {
            margin: 20px 0;
            font-size: 22px;
            font-weight: bold;
            color: #222;
            letter-spacing: 1px;
        }

        .security-tips {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ccc;
            color: #666;
            font-size: 14px;
        }

        .security-tips ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        .security-tips ul li {
            margin-bottom: 5px;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #999;
            font-size: 12px;
        }

        .footer a {
            color: #999;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <img src="logo.png" alt="Upward Saver Logo">
        </div>

        <!-- Content -->
        <div class="content">
            <h1>Confirm Your Registration</h1>
            <h2>Welcome to Upward Saver</h2>
            <p>Your registration is successful. You are just one step away from verifying your account.</p>
            <p>Please use the activation code below:</p>
            <p class="activation-code">{{$validToken}}</p>
        </div>

        <!-- Security Tips -->
        <div class="security-tips">
            <p><strong>Security Tips:</strong></p>
            <ul>
                <li>Never share your login details with anyone.</li>
                <li>This is an automated message; please do not reply.</li>
                <li>Enable two-factor authentication for added security.</li>
                <li>Report any suspicious activity immediately.</li>
            </ul>
            <p><em>Kind Regards,<br>Upward Saver Team</em></p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; 2025 Upward Saver. All rights reserved.</p>
            <p><a href="mailto:support@upwardsaver.com" rel="noopener noreferrer">Contact Support</a> | <a href="#" rel="noopener noreferrer">Unsubscribe</a></p>
        </div>
    </div>
</body>

</html>
