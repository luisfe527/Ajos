<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $asunto = $_POST['subject'];
    $mensaje = $_POST['text'];

    // tu correo al que deseas recibir las respuestas
    $destino = "luis_1991_71@hotmail.com";

    // construye el cuerpo del mensaje
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;

    // envía el mensaje
    mail($destino, $asunto, $contenido);

    // redirige a la página de agradecimiento después de enviar el correo
    header("Location: pagina-de-agradecimiento.html");
    exit;
}
?>
