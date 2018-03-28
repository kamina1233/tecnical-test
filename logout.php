<?php 
	//archivo para cerrar la base de datos
	//se usa para almacenar la sesion actual
	session_start();
	

	//con la sesion ya alamcenada esta funcion borra todo los datos de sesion para asi desloguear al usuario
	session_destroy();

	//se redirige al usuario al la pantalla de loguin
	header("location:Index.php");
	
 ?>