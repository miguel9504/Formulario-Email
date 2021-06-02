<?php
$destino='suministrosmakro@businesscorporationn.com';
//destinatario
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

$header="Enviado desde cpanel";
$mensajeCompleto="\nEmail: ". $email."\nAsunto: ". $asunto."\nMensaje: ". $mensaje."\nAtentamente: ".$nombre;
mail($destino,$asunto,$mensajeCompleto,$header);
echo "<script> setTimeout(\"location.href='resp.html'\",1000)</script>";