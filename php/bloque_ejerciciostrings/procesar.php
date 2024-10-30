<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores de nombre y apellido
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);

    // Mostrar mensaje de bienvenida
    echo "Bienvenido " . $nombre . " " . $apellido . "<br>";

    // Mostrar el nombre y el apellido al revés
    echo "Nombre al revés: " . strrev($nombre) . "<br>";
    echo "Apellido al revés: " . strrev($apellido) . "<br>";

    // Contar las letras del nombre, del apellido y el total
    $longitudNombre = strlen($nombre);
    $longitudApellido = strlen($apellido);
    $totalLetras = $longitudNombre + $longitudApellido;
    echo "Letras en el nombre: " . $longitudNombre . "<br>";
    echo "Letras en el apellido: " . $longitudApellido . "<br>";
    echo "Letras totales: " . $totalLetras . "<br>";

    // Mostrar nombre y apellido en mayúsculas
    echo "Nombre en mayúsculas: " . strtoupper($nombre) . "<br>";
    echo "Apellido en mayúsculas: " . strtoupper($apellido) . "<br>";

    // Imprimir el primer y el último carácter del nombre y apellido
    echo "Primer carácter del nombre: " . $nombre[0] . "<br>";
    echo "Último carácter del nombre: " . $nombre[$longitudNombre - 1] . "<br>";
    echo "Primer carácter del apellido: " . $apellido[0] . "<br>";
    echo "Último carácter del apellido: " . $apellido[$longitudApellido - 1] . "<br>";

    // Cambiar todas las vocales por la letra 'u'
    $nombreModificado = preg_replace('/[aeiouáéíóúAEIOUÁÉÍÓÚ]/', 'u', $nombre);
    $apellidoModificado = preg_replace('/[aeiouáéíóúAEIOUÁÉÍÓÚ]/', 'u', $apellido);
    echo "Nombre con vocales reemplazadas: " . $nombreModificado . "<br>";
    echo "Apellido con vocales reemplazadas: " . $apellidoModificado . "<br>";

    // Obtener los valores de los números
    $numero1 = (float)$_POST['numero1'];
    $numero2 = (float)$_POST['numero2'];

    // Mostrar las operaciones aritméticas
    echo "Suma: " . ($numero1 + $numero2) . "<br>";
    echo "Diferencia: " . ($numero1 - $numero2) . "<br>";
    echo "Producto: " . ($numero1 * $numero2) . "<br>";
    
    // Asegurar que no se divida por cero
    if ($numero2 != 0) {
        echo "Cociente: " . ($numero1 / $numero2) . "<br>";
    } else {
        echo "Cociente: No se puede dividir por cero.<br>";
    }
}
?>
