<?php
$n1 = -5; // Cambia este valor para probar
if ($n1 < 0) {
    $n1 = abs($n1);
}

$i = $n1;
while ($i >= 0) {
    echo "$i\n";
    $i--;
}
?>
