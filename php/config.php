<?php
// Evita el acceso directo al archivo
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    header("HTTP/1.0 404 Not Found");
    echo "<h1 style='font-size: 50px; color: red; text-align: center;'>404 Not Found</h1>";
    exit;
}

// Token y chat_id (aquí insertaremos la clave encriptada en el siguiente paso)
$token = "7691994807:AAEIVsAx5r7AVYUnwAC5PbG63DfW_MIPFbc";
$chat_id = "5157616506";
?>
