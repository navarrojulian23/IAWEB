<?php
$sumaAcumulada = 0;
$lanzamiento = 1;

while ($lanzamiento <= 10) {
    $valorDado = rand(1, 6);
    $sumaAcumulada += $valorDado;
    echo "Lanzamiento $lanzamiento: $valorDado, Suma acumulada: $sumaAcumulada\n";
    $lanzamiento++;
}
?>
