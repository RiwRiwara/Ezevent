<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        /* Basic styling for the form */
        body {
            font-family: Arial, sans-serif;
            background-color: #7FC9FF;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #053F5C;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #6366F1;
        }
    </style>
</head>

<body>
    <form id="reset-form">
        <h2>Reset Password</h2>
        <label for="new-password">New Password:</label>
        <input type="password" id="new-password" name="new-password" required>
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>
        <input type="submit" value="Reset Password">
    </form>

    <script>
        document.getElementById("reset-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Retrieve new password and confirm password values
            var newPassword = document.getElementById("new-password").value;
            var confirmPassword = document.getElementById("confirm-password").value;

            // Validate if passwords match
            if (newPassword !== confirmPassword) {
                alert("Passwords do not match!");
                return;
            }

            // You can perform additional validation or send the reset password request to the server here
            // For simplicity, let's assume the form submission is successful
            alert("Password reset successful!");
            // You might redirect the user to a login page or another appropriate page after resetting the password
        });
    </script>
</body>

</html>