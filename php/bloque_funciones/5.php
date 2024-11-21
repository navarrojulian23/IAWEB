<?php
function generar_contraseña() {
    $longitud = rand(8, 12);
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%&-";
    do {
        $contraseña = '';
        for ($i = 0; $i < $longitud; $i++) {
            $contraseña .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
    } while (!preg_match('/[@#$%&-]/', $contraseña));
    return $contraseña;
}
?>
