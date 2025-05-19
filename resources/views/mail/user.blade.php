<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upward Saver Bank Corporation</title>
    <style>
        /* Reset CSS and other styles remain the same */
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="#">
                <img src="{{asset('logo.png')}}" alt="Upward Saver Bank Corporation">
            </a>
        </div>
        <div class="content">
         <h2>{{ $data['subject'] }}</h2>
            <p>{{ $data['message'] }}</p>
            <!--<p>We wanted to inform you about an important update regarding your account. [Provide concise and relevant information here]</p>-->
            <!--<p>If you have any questions or concerns, please don't hesitate to contact our support team at <a href="mailto:support@upwardsaverbc.cc">support@upwardsaverbc.cc</a>.</p>-->
            <!--<p>Best Regards,<br>Upward Saver Bank Corporation</p>-->
        </div>
        <div class="footer">
            <p>&copy; 2025 Upward Saver Bank Corporation. All Rights Reserved.</p>
            <p><a href="#">UNSUBSCRIBE</a></p>
        </div>
    </div>
</body>
</html>
