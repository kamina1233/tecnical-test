<?php 
	//archivo que almacena las variables del usuario para luego mostrar los registros que ingreso

	//importa los parametros de conexion
	include("database.php");
	//almacena la session del usuario
	$id =  $_SESSION['current_id'];
	//query de sql para que busque todos los registros hechos por el usuario
	$sql = "SELECT * FROM formularios WHERE user_id = '$id' ";
	//se le pasa a la DB la consulta 
	$result = mysqli_query($conn,$sql);
	//se alamcena en un Array los datos obtenidos de la consulta para luego recorrerlos y mostrarlos en la web
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	//variable que almacena el tamaño del array
	$count = mysqli_num_rows($result);


 ?>