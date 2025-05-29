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
            text-align: center;
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
    
    <div class="container">
        <!-- Company Logo -->
        <img src="logo.png" alt="Upward Saver Bank Logo" class="logo">

        <h2>Check Deposit</h2>
        <p>{{ $messageContent }}</p>

        <div class="footer">
            &copy; 2025 Upward Saver Bank Corporation. All Rights Reserved.
        </div>
    </div>
</body>
</html>

