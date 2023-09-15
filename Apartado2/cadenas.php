<?php 
$nombre = trim($_GET['nombre'] ?? '', "/");

$prefijo = ($_GET["prefijo"] ?? '');

$len = strlen($nombre);

$mayus = strtoupper($nombre);

$minus = strtolower($nombre);

$pos = strpos($nombre, $prefijo);

$countA = substr_count($minus, "a");

$posA = stripos($nombre, "a");

$sustO = str_ireplace("o", "0", $nombre);

$url = 'http://username:password@hostname:9090/path?arg=value';

echo "Tu nombre es: $nombre, 
<br>Tu cadena mide $len caracteres
<br>Tu nombre en mayúsculas es: $mayus 
<br>Tu nombre en minúsculas es: $minus";

if (!empty($prefijo)){
    if ($pos === false) {
        echo "<br>El prefijo '$prefijo' no fue encontrado en su nombre '$nombre'";
    } else {
        echo "<br>El prefijo '$prefijo' fue encontrado en su nombre '$nombre'";
    }
}else{
    echo "<br>Inserta un Prefijo para esta función";
}

echo "<br>Hay un total de $countA de caracteres 'a o A'";

if ($posA === false){
    echo "<br>No existe ninguna 'a' en tu nombre";
}else{
    echo "<br>La posición de la primera 'a' es: " . ($posA + 1);
}

echo "<br>Tu nombre cambiando las 'o' por ceros: $sustO";

echo "<br><br>Siendo la URL la siguiente: 'http://username:password@hostname:9090/path?arg=value';";

echo "<br><br>El protocolo sería: " . parse_url($url, PHP_URL_SCHEME);
echo "<br>El usuario sería: " . parse_url($url, PHP_URL_USER);
echo "<br>El path sería: " . parse_url($url, PHP_URL_PATH);
echo "<br>Por último, el query sería: " . parse_url($url, PHP_URL_QUERY);
?>