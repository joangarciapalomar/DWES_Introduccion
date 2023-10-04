<html>

<body>

<?php 

function filtrado($datos){

    $datos = trim($datos); // Elimina espacios antes y después de los datos

    $datos = stripslashes($datos); // Elimina backslashes 

    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML

    return $datos;

}


if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){


    if(empty($_POST["nombre"])){

        $errores[] = "El nombre es requerido";

    }

    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])){

        $errores[] = "No se ha indicado email o el formato no es correcto";

    }

    // Si el array $errores está vacío, se aceptan los datos y se asignan a variables

    if(empty($errores)) {

        $nombre = filtrado($_POST["nombre"]);
        
        $email = filtrado($_POST["email"]);


    }

}
?>

<h2>Datos:</h2>
<hr>

<?php 

    if(isset($errores)){

    foreach ($errores as $error){

        echo "<li> $error </li>";

    }
}else{
    if ($nombre) {
        echo "Hola $nombre <br><br>";
    }

    if ($email) {
        echo "Tu email: $email<br><br>";
    }
}

   

?>

Tus estudios son: <?php echo filtrado($_POST["estudios"]); ?><br>

<?php 

$directorioSubida = "uploads/";

$max_file_size = "51200";

$extensionesValidas = array("jpg", "png", "gif");

if(isset($_POST["submit"]) && isset($_FILES['imagen'])){

    $errores = array();

    $nombreArchivo = $_FILES['imagen']['name'];

    $filesize = $_FILES['imagen']['size'];

    $directorioTemp = $_FILES['imagen']['tmp_name'];

    $tipoArchivo = $_FILES['imagen']['type'];

    $arrayArchivo = pathinfo($nombreArchivo);

    $extension = isset($arrayArchivo['extension']) ? $arrayArchivo['extension'] : "";

    // Comprobamos la extensión del archivo

    if(!in_array($extension, $extensionesValidas)){

        $errores[] = "La extensión del archivo no es válida o no se ha subido ningún archivo";

    }

    // Comprobamos el tamaño del archivo

    if($filesize > $max_file_size){

        $errores[] = "La imagen debe de tener un tamaño inferior a 50 kb";

    }

    // Comprobamos y renombramos el nombre del archivo

    $nombreArchivo = $arrayArchivo['filename'];

    $nombreArchivo = preg_replace("/[^A-Z0-9._-]/i", "_", $nombreArchivo);

    $nombreArchivo = $nombreArchivo . rand(1, 100);

    // Desplazamos el archivo si no hay errores

    if(empty($errores)){

        $nombreCompleto = $directorioSubida.$nombreArchivo.".".$extension;

        move_uploaded_file($directorioTemp, $nombreCompleto);

        print "El archivo se ha subido correctamente";

    }

}
?>

<br>Tu avatar es: <br><img src="<?php echo $nombreCompleto ?>" alt=""><br>

</body>

</html>