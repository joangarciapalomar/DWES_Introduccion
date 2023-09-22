<?php

$contactos = array(

    array(
        "codigo" => 1, "nombre" => "Juan Pérez",

        "telefono" => "966112233", "email" => "juanp@gmail.com"
    ),

    array(
        "codigo" => 2, "nombre" => "Ana López",

        "telefono" => "965667788", "email" => "anita@hotmail.com"
    ),

    array(
        "codigo" => 3, "nombre" => "Mario Montero",

        "telefono" => "965929190", "email" => "mario.mont@gmail.com"
    ),

    array(
        "codigo" => 4, "nombre" => "Laura Martínez",

        "telefono" => "611223344", "email" => "lm2000@gmail.com"
    ),

    array(
        "codigo" => 5, "nombre" => "Nora Jover",

        "telefono" => "638765432", "email" => "norajover@hotmail.com"
    ),

);

if (isset($_GET['dominio'])) {
    $dominioBuscado = $_GET['dominio'];

    $contactosFiltrados = array_filter($contactos, function ($contacto) use ($dominioBuscado) {
        $emailPartes = explode('@', $contacto['email']);
        $dominioContacto = end($emailPartes);
        return $dominioContacto === $dominioBuscado;
    });

    if (!empty($contactosFiltrados)) {
        echo "Contactos con el dominio $dominioBuscado: <br>";
        
        foreach ($contactosFiltrados as $contacto) {
            echo "{$contacto['codigo']} - {$contacto['nombre']} - {$contacto['telefono']} - {$contacto['email']}<br>";
        }
        echo "</ul>";
    } else {
        echo "No se encontraron contactos con el dominio $dominioBuscado.";
    }
} else {
    echo "Por favor, proporciona un dominio de correo electrónico.";
}

?>






