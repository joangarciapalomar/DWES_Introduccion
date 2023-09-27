<?php 

$navegador = $_SERVER['HTTP_USER_AGENT'];

if (str_contains($navegador, "Firefox")) {
    echo "<h1>Bienvenido</h1>";
} else {
    echo '<script language="javascript">alert("Necesitas Firefox para acceder a esta página web");</script>';
}

?>