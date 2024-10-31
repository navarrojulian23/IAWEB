<?php
$n1 = 29; // Cambia este valor para probar
$esPrimo = true;
$i = 2;

if ($n1 < 2) {
    $esPrimo = false;
} else {
    while ($i <= sqrt($n1)) {
        if ($n1 % $i == 0) {
            $esPrimo = false;
            break;
        }
        $i++;
    }
}

echo "$n1 es " . ($esPrimo ? "primo" : "no primo") . ".\n";
?>
