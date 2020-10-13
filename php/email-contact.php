<?php
$destinario = 'adrianpalaciosmedrano@gmail.com';

// al correo que va a hacer enviado 
 $nombre = $_POST['nombre'];
 $asunto = $_POST['asunto'];
 $mensaje = $_POST['mensaje'];
 $email = $_POST['email'];

 $header = "Enviado desde la pagina";
 $mensajeCompleto = $mensaje .  "\nAtentamente: " . $nombre;

mail($destinario,$asunto,$mensajeCompleto,$header);
echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='../index.html'\",1000)</script>";


?>