<?php
include('database.php');
session_start();
ini_set('display_errors', 'Off');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Bebu.ly</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>

    </script>
</head>

<body>
    <div class="login-page">
        <form id="loginForm">
            <div class="login-input-wrapper">
                <p class="login-logo">Bebu.ly</p>
                <div class="login-input-container">
                    <p>USERNAME</p>
                    <input>
                </div>
                <div class="login-input-container">
                    <p>PASSWORD</p>
                    <input>
                    <a href="#" id="forgotButt">forgot password</a>
                </div>
                <div id="loginSubmit">Login</div>

                <a href="#" id="registerButt">register</a>
            </div>

        </form>
    </div>
</body>

</html>