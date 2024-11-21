<?php
#Daniel Navarro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];

    if (preg_match("/@iespabloserrano\.com$/", $correo)) {
        echo "Correo válido: $correo";
    } else {
        header("HTTP/1.1 400 Bad Request");
        echo "<h1>Correo no permitido</h1>";
    }
}
?>
