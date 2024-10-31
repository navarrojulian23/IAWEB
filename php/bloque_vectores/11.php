<?php
$productos = [
    "Laptop" => 800,
    "Teléfono" => 600,
    "Tableta" => 300,
    "Reloj" => 150,
    "Auriculares" => 100
];
asort($productos); // Ordenar por precio en orden ascendente

echo "Array de productos ordenado por precio:\n";
print_r($productos);
?>
