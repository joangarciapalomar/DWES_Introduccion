<?php  
require('../CRUD/conexion.php');

$errores = [];
    if (isset($_POST['submit'])){
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $contraRep = $_POST['contraRepe'];
        if (empty($usuario)){
            $errores[] = "El usuario no debe estar vacío.";
        }
        if(empty($email)){
            $errores[] = "El email no debe estar vacío.";
        }
        if (empty($contraseña)){
            $errores[] = "La contraseña no debe estar vacía.";
        }

        if ($contraseña != $contraRep){
            $errores[] = "Las contraseñas no coinciden";
        }
        
        if($usuario && $contraseña){
            $insert = "INSERT INTO users (username, email, password) VALUES ('$usuario', '$email', '$contraseña')";
            $pdoSt = $pdo->prepare($insert);
            $valores = $pdoSt->execute();

            if($usuario && $contraseña){
                $select = "SELECT * FROM users WHERE username = ? AND password = ?";
                $pdoSt = $pdo->prepare($select);
                $pdoSt-> bindValue(1, $usuario);
                $pdoSt-> bindValue(2, $contraseña);
    
                $valores = $pdoSt->execute();
    
                $log = $pdoSt->fetch();
    
                if ($log){
                    $_SESSION['username'] = $usuario;
                    header('location: login.php');
                }else{
                    $errores[] = "Error en la creación del Usuario";
                }
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
    <title>Registro</title>
</head>
<body>
<?php 
    if(!empty($errores)){
        foreach ($errores as $error){
            echo "<ul><li> $error </li></ul>";
        }   
    }

    ?>
    <form action="registro.php" method="POST">
    Usuario:<input type="text" name="usuario"><br>
    Email:<input type="email" name="email"><br>
    Contraseña:<input type="password" name="contraseña"><br>
    Repite la contraseña:<input type="password" name="contraRepe"><br>
    <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>