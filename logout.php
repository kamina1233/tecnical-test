<?php 

	//archivo para cerrar la base de datos
	session_start();
	session_destroy();

	header("location: Index.php")
	
 ?>