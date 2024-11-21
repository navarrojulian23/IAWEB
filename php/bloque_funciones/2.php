<?php
function calcular_imc($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    if ($imc < 18.5) {
        $categoria = "Bajo peso";
    } elseif ($imc < 24.9) {
        $categoria = "Peso normal";
    } elseif ($imc < 29.9) {
        $categoria = "Sobrepeso";
    } else {
        $categoria = "Obesidad";
    }
    return ["imc" => $imc, "categoria" => $categoria];
}
?>
