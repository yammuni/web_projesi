<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .form p{
            padding:60px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="form">
        <p>

            <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validate the username and password (example: check against hardcoded values)
        if ($username === "admin" && $password === "password") {
            // Successful login
            echo "Login successful!";
        } else {
            // Invalid username or password
            echo "Invalid username or password.";
        }
    }
    ?>
        </p>
    </div>
</body>