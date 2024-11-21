<?php
function numero_mas_frecuente(...$numeros) {
    $conteo = array_count_values($numeros);
    arsort($conteo);
    return array_key_first($conteo);
}
?>
