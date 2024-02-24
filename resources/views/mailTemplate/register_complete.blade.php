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

        .confirmation-email a:hover {
            text-decoration: underline;
        }

        .smaller-img {
            width: 150px;
            height: auto;
            margin: 0 auto;
        }

        .check-icon {
            width: 50px;
            height: auto;
            display: block;
            margin: 0 auto;
            margin-bottom: 20px;
        }

        .center-text {
            text-align: center;
            color: #053F5C;
        }
    </style>
</head>

<body>
    <div class="image-container">
        <img src="http://127.0.0.1:9000/images/Logo.png" alt="EZEVENT" class="smaller-img">
    </div>
    <div class="confirmation-email">
        <img src="https://www.flaticon.com/svg/static/icons/svg/561/561094.svg" alt="Check Icon" class="check-icon">
        <h2 class="center-text">Registeration Complete</h2>
        <p>Thank you for registering on Ezevent. You are almost done.</p>
        <p>Please note that your organization administrator will also need to approve your registration for you to use all available funtionallities in Ezevent</p>
        <a href="login">Back to Login</a>
    </div>
</body>

</html>