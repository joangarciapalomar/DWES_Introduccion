<?php 
require("../CRUD/conexion.php");
session_start();

function filtrado($datos){

    $datos = trim($datos); // Elimina espacios antes y después de los datos

    $datos = stripslashes($datos); // Elimina backslashes 

    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML

    return $datos;

}

$errores = [];
    if (isset($_POST['submit'])){
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        if (empty($usuario)){
            $errores[] = "El usuario no debe estar vacío.";
        }
        if (empty($contraseña)){
            $errores[] = "La contraseña no debe estar vacía.";
        }
        
        if($usuario && $contraseña){
            $select = "SELECT * FROM users WHERE username = ? AND password = ?";
            $pdoSt = $pdo->prepare($select);
            $pdoSt-> bindValue(1, $usuario);
            $pdoSt-> bindValue(2, $contraseña);

            $valores = $pdoSt->execute();

            $log = $pdoSt->fetch();

            if ($log){
                $_SESSION['username'] = $usuario;
                header('location: privada.php');
            }else{
                $errores[] = "Usuario no existe";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php 
    if(!empty($errores)){
        foreach ($errores as $error){
            echo "<ul><li> $error </li></ul>";
        }   
    }

    ?>
    <form action="login.php" method="POST">
    Usuario:<input type="text" name="usuario"><br>
    Contraseña:<input type="password" name="contraseña"><br>
    <input type="submit" name="submit" value="Enviar">
    </form>
    <a href="registro.php">Registrate aquí</a>
</body>
</html>