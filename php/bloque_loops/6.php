<?php
$n1 = 36; // Cambia este valor para probar
$i = 1;
echo "Divisores de $n1:\n";

while ($i <= $n1) {
    if ($n1 % $i == 0) {
        echo "$i\n";
    }
    $i++;
}
?>
