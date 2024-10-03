<?php
header('Content-Type: application/json');

// Incluir archivo de configuración
include 'config.php'; // Cambia esta ruta por la ubicación real del archivo config.php

echo json_encode([
    "token" => $token,
    "chat_id" => $chat_id
]);
?>
