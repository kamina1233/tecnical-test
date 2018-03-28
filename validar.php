<?php 
//se incluye el archivo que almacena la conexion
include("database.php");
//crea una sesion
session_start();

//si verifica si el formulario uso el metodo post para enviar los valores
if($_SERVER["REQUEST_METHOD"] == "POST") {
	//se almacenan los datos de los txt del formulario en estas variables 

	//se usa el metodo mysqli_real_escape_string(conexion , variable que almacena nombre de usuario ó contraseña) por motivos de seguridad evitando una inyeccion SQL alterada;
 	$myusername = mysqli_real_escape_string($conn,$_POST["usuario"]); 
  $mypassword = mysqli_real_escape_string($conn,$_POST["pass"]); 
  $date = $fecha = date("d-m-Y");


  //se crea la consulta a la base de datos y se almacena en la variable 
  $query = "SELECT id FROM empleado WHERE user = '$myusername' and pass = '$mypassword'";

  //se manda la consulta a la base de datos
  $result = mysqli_query($conn,$query);

  //se almacena el resultado en un arreglo para luego hacer una comparacion 
 	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   	
 	//se almacena el numero de filas a la variable 
 	$count = mysqli_num_rows($result);


 	if($count == 1) {
 		//se almasena el id del usuario para crear una sesion unica
 		$_SESSION["current_id"] = $row["id"];
 		//se almasena el nombre del usuario para ser usado despues
 		$_SESSION["current_user"] = $myusername;
 		//se lo dirige a la pagina de la sesion iniciada
  	header("location:logued.php");
   		}else {
   			//se lo devuelve al login en el caso de que no ingrese bien los datos
        
   			header("location:Index.php");
   		}
}

?>