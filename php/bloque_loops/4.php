<?php
$numero = rand(1, 50);
$i = 1;
echo "Tabla de multiplicar de $numero:\n";

while ($i <= 10) {
    echo "$numero x $i = " . ($numero * $i) . "\n";
    $i++;
}
?>
