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
            margin: 0 auto;
            max-width: 600px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        h2 {
            color: #e3342f;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>Deposit Declined</h2>
        <p>{{ $messageContent }}</p>
        <p>If you believe this is an error, please contact support.</p>
    </div>
</body>
</html>
