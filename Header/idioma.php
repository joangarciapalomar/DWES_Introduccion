

<?php

$idioma = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

if (strpos($idioma, 'en') === 0) {
    echo "This page is in English.";
} elseif (strpos($idioma, 'es') === 0) {
    echo "Esta página está en Español.";
} elseif (strpos($idioma, 'ca') === 0) {
    echo "Aquesta pàgina està en Català.";
} else {
    echo "This page is in English. (idioma predefinido)";
}


?>

<!doctype html>

<html lang="es">

<head>

<meta charset="utf-8">

<title><?= $title ?></title>

</head>    

<body>



</body>

</html>