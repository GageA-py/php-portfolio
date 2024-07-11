<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Signing Up!</title>
    <style>
        /* Reset some default styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        /* Container styling */
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        /* Heading styling */
        h1 {
            color: #333;
            text-align: center;
        }
        /* Paragraph styling */
        p {
            color: #555;
            font-size: 16px;
            text-align: center;
        }
        /* Button styling */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2d3748;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        /* Responsive styles */
        @media screen and (max-width: 600px) {
            .container {
                width: 100%;
                padding: 10px;
            }
            .btn {
                display: block;
                width: 70%;
                margin: 8px auto;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank You for Signing Up!</h1>
        <p>If you missed your chance when signing up, consider clicking the subscribe button
            to be notified of new projects uploaded, and new features added to the site.
        </p>
        <p>
        <a href="{{ route('subscribe', ['token' => $user->subscription_token]) }}" class="btn">Subscribe Now</a>
        </p>
    </div>
</body>
</html>
