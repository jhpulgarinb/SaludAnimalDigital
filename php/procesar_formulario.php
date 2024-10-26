<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
// ... otros datos

// Procesar los datos (guardar en base de datos, enviar correo, etc.)
// ...

// Enviar un correo de confirmación
mail($email, "Solicitud de adopción recibida", "Gracias por tu interés en adoptar una mascota.");
?>