<?php
function calcular_rectangulo($largo, $ancho) {
    $area = $largo * $ancho;
    $perimetro = 2 * ($largo + $ancho);
    return ["area" => $area, "perimetro" => $perimetro];
}
?>
