<?php
session_start();
$name = $_SESSION["name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2><?= $name?> Thank you! Donation recieved</h2>
                <div class="underline-title"></div>
            </div>
            
            <p class="text">Thank you so much for the donation</p>            
        </div>
    </div>
</body>
</html>