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
    <title>Messages | Bebu.ly</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>

    </script>
</head>

<body>
    <div class="messages-page">

        <div class="page-wrapper">
            <p class="page-header">Messages</p>
            <div class="chat-box">
                <div class="chat-bar">
                    <div class="chat-bar-profile">
                        <div class="chat-bar-profile-pic"></div>
                    </div>
                    <div class="chat-bar-detail">
                        <p class="chat-bar-name">Stan Magallon</p>
                        <p class="chat-bar-last-message">tralalero tralala</p>
                    </div>
                </div>
            </div>
            <div class="nav-bar">
                <a href="#"><img src="img/icon/chat-active.png"></a>
                <a href="#"><img src="img/icon/to-do.png"></a>
                <a href="#"><img src="img/icon/plan.png"></a>
                <a href="#"><img src="img/icon/chat-active.png"></a>
            </div>
        </div>
    </div>
</body>

</html>