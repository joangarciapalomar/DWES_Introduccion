<?php

$mode = $_GET['mode'] ?? ($_COOKIE['mode'] ?? 'light');

setcookie('mode', $mode, time() + 30 * 24 * 60 * 60);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo</title>
    <style>
        .light {
            background-color: #FFFFFF;
        }

        .dark {
            background-color: #3f3f3f;
        }
    </style>
</head>

<body class="<?= $mode ?>">

    <p><a href="?mode=light">Modo Claro</a></p>
    <p><a href="?mode=dark">Modo Oscuro</a></p>

</body>

</html>