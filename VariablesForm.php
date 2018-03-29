<?php 
include("database.php");
error_reporting(0);
session_start(); 




//se utiliza un condicional para conprobar si hay algun chkbox de SERVICIO[] seleccionado
if ( !empty($_POST["servicio"]) && is_array($_POST["servicio"]) ) {
//EJECUTAMOS EN ESTE CASO UNA LISTA 
    foreach ( $_POST["servicio"] as $servicio ) { 
            
            if(in_array('SOtros', $_POST['servicio'])){
				$servicio = $_POST['serv-otros'];
				
			}
     }
}

//se utiliza un condicional para conprobar si hay algun chkbox de METODO[] seleccionado
if ( !empty($_POST["metodo"]) && is_array($_POST["metodo"]) ) {
//EJECUTAMOS EN ESTE CASO UNA LISTA 
    foreach ( $_POST["metodo"] as $metodo ) { 
            
     }
     
}

//se utiliza un condicional para conprobar si hay algun chkbox de MOTIVO[] seleccionado
if ( !empty($_POST["motivo"]) && is_array($_POST["motivo"]) ) {
    foreach ( $_POST["motivo"] as $motivo ) { 
    		
            if(in_array("MOtros", $_POST["motivo"])){
				$motivo = $_POST["motivs-otros"];
				
			}

     }
     
}
//se alamacenan todos los datos ingresados por el usuario para luego registrarlos en la DB
$fecha = date("Y-m-d");
$usuario = $_SESSION['current_id'];
$nombre = $_POST["nombre"];
$cargo = $_POST["cargo"];
$empresa = $_POST["empresa"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$obs = $_POST["observasiones"];




//Condicional para insertar los datos en la DB
if($_SERVER["REQUEST_METHOD"] == "POST") {
//Consulta Query de registro para la DB
$sql_insertar = "INSERT INTO formularios (user_id, empresa_nombre, emprea_cargo, empresa_empresa, empresa_email, empresa_telefono, empresa_obs, chk_servicio, chk_metodo, chk_motivo, fecha) VALUES ('".$_SESSION["current_id"]."', '$nombre', '$cargo', '$empresa', '$email', '$telefono', '$obs', '$servicio','$metodo', '$motivo', '$fecha')";
//se manda la query a la DB
mysqli_query($conn,$sql_insertar);
//se cierra la conexion
mysqli_close($con);
//recarga la pagina 
header("location:logued.php");
}

?>
















