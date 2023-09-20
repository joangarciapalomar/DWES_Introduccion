<?php
$temperaturas = "31, 25, 22, 27, 16, 9, 30, 29, 23, 11, 5, 20";

$arrayTemp = explode(", ", $temperaturas);

$count = count($arrayTemp);

$media = array_sum($arrayTemp) / $count;

echo "La media es de " . number_format($media, 1) . "º.";

sort($arrayTemp);

echo "<br><br>Los 5 registros de menos temperatura este mes son:  ";

for ($i = 0; $i <= 5; $i++) {
    echo $arrayTemp[$i] . "º, ";
}

echo "<br><br>Los 5 registros de mas temperatura este mes son:  ";

rsort($arrayTemp);

for ($i = 0; $i <= 5; $i++) {
    echo $arrayTemp[$i] . "º, ";
}




?>