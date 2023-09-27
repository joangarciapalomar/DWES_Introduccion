<?php 

$letMeIn = $_GET["letMeIn"] ?? 0;

$imagen = $_GET["imagen"] ?? 0;

if (isset($_GET["letMeIn"])){
    if ($letMeIn == 0) {
        if ($imagen == 0){
            header('Content-Type: image/png');
            imagepng(imagecreatefrompng("/home/alumno/Documentos/DWES_Proyectos/DWES_Imagenes/prohibido.png"));
    
        }else if($imagen == 1){
            header('Content-Type: image/png');
            imagepng(imagecreatefrompng("/home/alumno/Documentos/DWES_Proyectos/DWES_Imagenes/prohibido.png"));     
        }else{
            header('Content-Type: image/png');
            http_response_code(404);
            imagepng(imagecreatefrompng("/home/alumno/Documentos/DWES_Proyectos/DWES_Imagenes/404.png"));
        }
        
    }else if($letMeIn == 1){
        if ($imagen == 0){
            header('Content-Type: image/png');
            imagepng(imagecreatefrompng("/home/alumno/Documentos/DWES_Proyectos/DWES_Imagenes/prohibido.png"));
    
        }else if($imagen == 1){
            header('Content-Type: image/png');
            imagepng(imagecreatefrompng("/home/alumno/Documentos/DWES_Proyectos/DWES_Imagenes/bien.png"));
        
        }else{
            header('Content-Type: image/png');
            http_response_code(404);
            imagepng(imagecreatefrompng("/home/alumno/Documentos/DWES_Proyectos/DWES_Imagenes/404.png"));
        }
        
    }
    
}else {
    header('Content-Type: image/png');
    http_response_code(404);
    imagepng(imagecreatefrompng("/home/alumno/Documentos/DWES_Proyectos/DWES_Imagenes/404.png"));
}


?>



