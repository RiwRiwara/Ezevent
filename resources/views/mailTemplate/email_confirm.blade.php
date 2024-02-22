<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #7FC9FF;
            margin: 0;
            padding: 0;
        }

        .image-container {
            text-align: center;
            margin-top: 100px;
        }

        .confirmation-email {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 800px;
            margin: 0 auto;
            margin-top: 50px;
        }

        .confirmation-email p {
            margin-bottom: 20px;
        }

        .confirmation-email a {
            color: #053F5C;
            text-decoration: none;
            font-weight: bold;
        }

        .confirmation-email a:hover {
            text-decoration: underline;
        }

        .center-text {
            text-align: center;
            color: #053F5C;
        }

        .smaller-img {
            width: 150px;
            height: auto;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="image-container">
        <img src="http://127.0.0.1:9000/images/Logo.png" alt="EZEVENT" class="smaller-img">
    </div>
    <div class="confirmation-email">
        <h2 class="center-text">Email Confirmation</h2>
        <p>We’re excited to welcome you to Ezevent! Before you begin your journey, we need to verify your account. Follow these steps to complete the verification process:</p>
        <p>Click the link to verify your account: <a href=" YOUR_CONFIRMATION_LINK" target="_blank">Confirm Email</a></p>
        <p>If you encounter any issues or have questions, our support team is here to help. Simply reply to this email or reach out to us at Ezevent@mail.com</p>
        <p>Welcome aboard!</p>
        <p>Sincerely,</p>
        <p>The Ezevent Team</p>
    </div>
</body>

</html>