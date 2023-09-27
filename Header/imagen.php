<?php 

$letMeIn = $_GET["letMeIn"] ?? 0;

$imagen = $_GET["imagen"] ?? "";

if (isset($_GET["letMeIn"])){
    if ($letMeIn == 0) {
          if ($imagen == "bien.png"){
            header('Content-Type: image/png');
            http_response_code(401);
            imagepng(imagecreatefrompng("/home/alumno/Documentos/DWES_Proyectos/DWES_Imagenes/prohibido.png"));  
        }else{
            header('Content-Type: image/png');
            http_response_code(404);
            imagepng(imagecreatefrompng("/home/alumno/Documentos/DWES_Proyectos/DWES_Imagenes/404.png"));
        }
        
    }else if($letMeIn == 1){
        if($imagen == "bien.png"){
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



