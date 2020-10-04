<?php
$destinatario = 'marcorentero7@gmail.com';
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$header = "Enviado desde la página Ecocarton";
$mensajeCompleto = $mensaje . "\nAtentamente: " .$nombre . $email;
mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>
