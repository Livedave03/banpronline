<?php
// Evitar el acceso directo al archivo
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    // Mostrar error 404 en grande y detener la ejecución si alguien accede directamente
    header("HTTP/1.0 404 Not Found");
    echo "<h1 style='font-size: 50px; color: red; text-align: center;'>404 Not Found</h1>";
    exit;
}

// Aquí están tus datos sensibles
$token = "7584579761:AAF_gz-XhA7nA9wSzN6OaWP6Ml1UX9DGgkU";
$chat_id = "5157616506";
?>
