<?php
	
	session_start();

	if (isset($_SESSION['MiSession'])){
    	session_destroy();
    	echo "Se ha destruido la sesión <br><a href='index.php'>Volver</a> ";
  	}
?>
