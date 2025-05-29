<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Deposit Approved</title>
    <style>
        /* Reset some defaults */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            color: #2c3e50;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            max-width: 480px;
            width: 90%;
            box-shadow: 0 8px 20px rgba(44, 62, 80, 0.1);
            text-align: center;
            transition: box-shadow 0.3s ease;
        }
        .container:hover {
            box-shadow: 0 12px 30px rgba(44, 62, 80, 0.15);
        }

        .logo {
            max-width: 160px;
            margin-bottom: 25px;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
        }

        h2 {
            font-size: 1.9rem;
            margin-bottom: 20px;
            color: #34495e;
            letter-spacing: 0.03em;
        }

        p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 35px;
            line-height: 1.5;
        }

        .footer {
            font-size: 0.85rem;
            color: #999;
            border-top: 1px solid #e1e4e8;
            padding-top: 15px;
            letter-spacing: 0.04em;
            user-select: none;
        }
    </style>
</head>
<body>
    <div class="container" role="main" aria-label="Deposit approval message">
        <img src="https://upwardsaverbc.com/logo.png" alt="Upward Saver Bank Logo" class="logo" />
        <h2>Check Deposit</h2>
        <p>{{ $messageContent }}</p>
        <div class="footer">
            &copy; 2025 Upward Saver Bank Corporation. All Rights Reserved.
        </div>
    </div>
</body>
</html>
