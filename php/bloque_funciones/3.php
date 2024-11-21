<?php
function convertir_temperatura($valor, $escala) {
    if (strtoupper($escala) == "C") {
        return ($valor * 9 / 5) + 32; // Celsius a Fahrenheit
    } elseif (strtoupper($escala) == "F") {
        return ($valor - 32) * 5 / 9; // Fahrenheit a Celsius
    } else {
        throw new Exception("Escala no válida, usa 'C' o 'F'.");
    }
}
?>
