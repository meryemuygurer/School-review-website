<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Font Değiştirme</title>
    <style>
        * {
            font-family: 'Arial', sans-serif;
            font-size: 15px;
        }
        body{
            width: 100%;
            height: 100vh;
            background-color: rgb(247, 232, 247);
        }
    </style>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];

        echo "<p class='custom-font'>Kullanıcı adınız: $username</p>". "<br>"; 
    }
    ?>
</body>
</html>