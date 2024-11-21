<?php
function calcular_promedio_y_mediana($numeros) {
    $promedio = array_sum($numeros) / count($numeros);
    sort($numeros);
    $mediana = count($numeros) % 2 == 0 ?
        ($numeros[count($numeros) / 2 - 1] + $numeros[count($numeros) / 2]) / 2 :
        $numeros[floor(count($numeros) / 2)];
    return ["promedio" => $promedio, "mediana" => $mediana];
}
?>
