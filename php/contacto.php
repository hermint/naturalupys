<?php
	$destino="harryhermint@gmail.com";
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$mensaje=$_POST['mensaje'];
	$asunto="Diseño Web";
	$contenido="Nombre: .$nombre \nCorreo: .$email \nMensaje: ".$mensaje;
	mail($destino,$asunto,$contenido);
	header("location:../html/enviado.html");
?>