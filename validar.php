<?php 
include("database.php");
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {
 	$myusername = mysqli_real_escape_string($conn,$_POST['usuario']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 

    $query = "SELECT id FROM empleado WHERE user = '$myusername' and pass = '$mypassword'";
    $result = mysqli_query($conn,$query)or die(mysqli_error($conn));
   	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   	

   	$count = mysqli_num_rows($result);

   	if($count == 1) {
   		
   		$_SESSION['id'] = $row['id'];
   		var_dump($_SESSION);
 		 header("location:logued.php");
   		}else {
   			echo 'Hi reddit reader!!';
   			header("location:Index.php");
   		}
}

?>