<?php 
session_start();

require_once('database.php');
//se setean los valores de los campos usuario y contraseña del formulario index
$usuario = $_POST['usuario'];
$password = $_POST['pass'];


//se almacena la query de SQL en una varible
$query = "SELECT * FROM empleado WHERE user = '$usuario'";

//se almacena el resultado de la query a una variable
$result = $conn->query($query);

//se chequea si se pudo hacer la consulta
if(!$result = $conn->query($query)){
die('Surgio un error en la consulta [' . $conn->error. ']');
}else{
	echo "esta buena la queri----"."";
}


$row = $result->fetch_assoc();



//se checkea si el usuario ingreso los datos bien (revisar por q no funciona como se debe)
if($row['username']=="$usuario" && $row['password']=="$pass"){
 	echo "vamo lo pibe";
} 
else{
	echo "la puta madre";
} 

?>