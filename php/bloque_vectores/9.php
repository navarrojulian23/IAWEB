<?php
$marcas = [
    "Toyota" => "Japón",
    "Ford" => "EEUU",
    "Volkswagen" => "Alemania",
    "Renault" => "Francia"
];
unset($marcas["Ford"]); // Borra la marca Ford

echo "Array de marcas actualizado:\n";
print_r($marcas);
?>
