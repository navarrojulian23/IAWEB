<?php
$empleados = [
    "Carlos" => 3000,
    "Ana" => 2500,
    "Luis" => 4000,
    "María" => 3500,
    "Javier" => 2800
];
ksort($empleados); // Ordenar por nombre en orden ascendente

echo "Array de empleados ordenado por nombre:\n";
print_r($empleados);
?>
