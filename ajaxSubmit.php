<?php

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $email . '\r\n';
$header = 'X-Mailer:PHP/ ' . phpversion() . '\r\n';
$header = 'Mime-Version: 1.0 \r\n';
$header = 'Content-Type: text/plain';

$comentario = '*************************************************\r\n';
$comentario = '***** MENSAJE DE WWW.PROTOPRINT.NET.CO **********\r\n';
$comentario = '*************************************************\r\n';
$comentario = 'Este mensaje fue enviado por: '. $nombre . '\r\n';
$comentario = 'Su teléfono es: ' . $telefono . '\r\n';
$comentario = 'Su e-mail es: ' . $email . '\r\n';
$comentario = 'Su mensaje es: ' . $mensaje . '\r\n';

$para = 'alexcoronell@gmail.com';
$asunto = 'Contacto desde la página web';

mail($para, $asunto, utf8_encode($comentario), $header);

// Respuesta al servidor
$nombre = $_POST['nombre'];
 echo json_encode(array(
    'Mensaje' => sprintf('Se recibió el correo de ' . $nombre)
)); 
?>

