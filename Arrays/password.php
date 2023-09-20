<?php 
    function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){

        $pwd = [];

        for ($i=0; $i < $upper; $i++) { 
            $pwd[] = chr(rand(65, 90));
        }

        for ($i=0; $i < $lower; $i++) { 
            $pwd[] = chr(rand(97, 122));
        }

        for ($i=0; $i < $numeric; $i++) { 
            $pwd[] = chr(rand(48, 57));
        }

        for ($i=0; $i < $other; $i++) { 
            $pwd[] = chr(rand(33, 47));
        }

        shuffle($pwd);

        $rand_pwd = implode("", $pwd);

        echo "La contraseña és: " .$rand_pwd;
        
    }

    echo rand_Pass();
?>