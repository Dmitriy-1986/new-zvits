<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Серверна інформація</title>
    <style>
        body {
            background: #333;
            color: #CCC;
        }   
    </style>
</head>
<body>
<?php
echo '<pre>';
        print_r($_SERVER);
echo '</pre>';
?>
</body>
</html>