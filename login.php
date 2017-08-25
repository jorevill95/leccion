<?php
	
	session_start();

	$_SESSION['MiSession']= $_POST['user'];

	$nombre = $_POST['user'];
	$apellido = $_POST['password'];

	echo "Usuario: " . $nombre . "<br> Clave: " . $apellido . "<br><a href='index.php'>Volver</a> ";
?>
