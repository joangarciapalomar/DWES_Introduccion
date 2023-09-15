<?php 
    $alumno = array(
        'nombre' => 'Sara',
        'apellido' => 'García',
        'edad' => 22
    );

    $alumno = [
        'nombre' => 'Sara',
        'apellido' => 'García',
        'edad' => 22
    ];
    $alumno['nombre'] = 'Verónica';
    echo $alumno['nombre'];
?>