
<?php 
//se definen los valores para la conexion a la DB
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'empresa');


//se almacena la conexion a una variable 
$conn= mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


//se checkea  que la conexion este andando ,en el caso que no, se informa el porque 
if($conn === false){
    die("No se pudo conectar:  " . mysqli_connect_error());

}
	


?> 