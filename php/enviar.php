<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Configura tu servidor SMTP para enviar correos electrónicos
$to = 'tu_correo@ejemplo.com';
$subject = 'Nuevo mensaje desde SaludAnimalDigital';
$message = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";
$headers = "From: $email";

// Enviar el correo electrónico
mail($to, $subject, $message, $headers);

// Mostrar un mensaje de confirmación
echo '¡Mensaje enviado correctamente!';
?>