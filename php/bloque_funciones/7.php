<?php
function calcular_precio_descuento($precio, $descuento) {
    return $precio - ($precio * ($descuento / 100));
}
?>
