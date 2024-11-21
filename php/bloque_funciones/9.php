<?php
function validar_contraseña($contraseña) {
    if (strlen($contraseña) <= 8) return false;
    if (!preg_match('/[A-Z]/', $contraseña)) return false;
    if (!preg_match('/[a-z]/', $contraseña)) return false;
    if (!preg_match('/[^a-zA-Z0-9]/', $contraseña)) return false;
    return true;
}
?>
