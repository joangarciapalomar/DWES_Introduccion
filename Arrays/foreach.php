<?php

$color = array('blanco', 'verde', 'rojo');



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        foreach ($color as $colorin) {
            echo "<li>" .
                $colorin .
                "</li>";
        }
        ?>
    </ul>
</body>

</html>