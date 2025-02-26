

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Payment</title>
    <style>
        /* General styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .thankyou-message h1 {
            font-size: 36px;
            color: #4CAF50;
        }

        .thankyou-message p {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }

        .home-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .home-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="thankyou-message">
            <h1>Thank You!</h1>
            <p>Your payment has been successfully processed.</p>
            <p>We appreciate your business and look forward to serving you again soon.</p>
            <a href="welcome.html" class="home-button">Go to Home</a>
        </div>
    </div>
</body>
</html>
