<?php  
$fruta = ["pera" => "verde", "manzana" => "roja", "naranja" => "naranja", "kiwi" => "marron"];

function cmp($a, $b) {
    $lenA = strlen($a);
    $lenB = strlen($b);

    if ($lenA == $lenB) {
        return 0;
    }

    return ($lenA < $lenB) ? -1 : 1;
}

    uasort($fruta, 'cmp');

    echo "Fruta por la longitud de su descripción: <br>";

    foreach ($fruta as $frut => $desc) {
        echo "$frut: $desc \n<br>";
    }

?>