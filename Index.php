
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
	<link rel="stylesheet" href="css/StyleLoguin.css">
	<script src="js/prefixfree.min.js" type="text/javascript"></script><!--pluguin que agrega los prefijos para navegadores desactualizados-->
</head>

<body>	
	<div class="contenedor"><!--contenedor principal de la web-->
		
		<div class="form-login"><!--contenedor de la caja principal-->

			<!-- formulario con el metodo post para obtener los valores de los TXT -->
			<form method="POST" action="validar.php">
			<div class="inputs">
				<!--Items de la caja-->
				<label for="usuario" class="nombre">Usuario</label>
				<input type="text" name="usuario" placeholder="Ingrese Usuario" required/>
				<label for="pass" class="pass">Contraseña</label>
				<input type="password" name="pass" placeholder="Ingrese contraseña"  required/>
				<input type="submit" class="button" value="iniciar sesion">
				</div>
			</form>

		</div>
	</div>
		
	</div>
</body>
</html> 
