<?php 
	session_start();
	
	if (isset($_SESSION["current_id"]) && $_SESSION["current_id"] == true){
		


	}else{
			echo "<script  type='text/javascript'>";
			echo "alert('No estas logueado');";
			echo "</script>";
			echo "<br/>" . "<a href='index.php'>volver al Login</a>";
			exit;
		}

	include("VariablesForm.php");

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario de usuario ingresado</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
	<link rel="stylesheet" href="css/styleLoged.css">
	<script type="text/javascript" src="js/prefixfree.min.js"></script>
	<script type="text/javascript" src="js/jquery-latest.js"></script>
	
</head>

<body>
	<div class="header">
	<h1 class="user"><a href="#">Bienvenido Usuario -(<?php echo $_SESSION['current_user']; ?>)-</a></h1>
      <ul class="main-nav">
          <li><a href="#">Funcion?</a></li>
          
          <li><a href="logout.php">SALIR!!!</a></li>
          <!-- <p><?php echo "Fecha actual ".date("d-m-Y"); ?></p> -->
      </ul>
	</div> 

	
	<div class="contenedor">
		<div class="caja form">
			<form action="VariablesForm.php" method="POST">
				<ul> 
					<!-- Formulario para rellenar las visitas -->
						
						<li>
							<label for="nombre">Nombre</label>
							<input type="text" class="input-nombre" name="nombre" placeholder="Ingrese Nombre" required/>
						</li>

						<li>
							<label for="cargo">Cargo</label>
							<input type="text" class="input-cargo" name="cargo" placeholder="Ingrese el Cargo empresarial"required/>	
						</li>

						<li>
							<label fors="empresa">Empresa</label>
							<input type="text" class="input-empresa" name="empresa" placeholder="Ingrese nombre de la empresa"required/>
						</li>

						<li>
							<label for="email">E-mail</label>
							<input type="text" class="input-email" name="email" placeholder="ingrese direccion de E-mail"required/>
						</li>
	
						<li>
							<label for="telefono">Telefono</label>
							<input type="text" class="input-telefono" name="telefono" placeholder="Ingrese numero de telefono de la empresa" required/>
						</li>
					</div>

					<!--********* CHECKBOX ************* -->		
				
					<li>
						<ul>
							<div class="servicios">
						<!--******SERVICOS CHKBOX******* -->	
								<p>Tipo de servicio</p>
								<li>
									<input type="checkbox" name="servicio[]" value="Consultoria">
									<label for="consultoria">Consultoria</label>
								</li>
						
								<li>
									<input type="checkbox" name="servicio[]" value="Simuladores">
									<label for="simuladores">Simuladores</label>
								</li>

								<li>
									<input type="checkbox" name="servicio[]" value="Sist. de Gestion">
									<label for="gestion">Sist. de Gestion</label>
								</li>
	
								<li>
									<input type="checkbox" name="servicio[]" value="SOtros">
									<label for="serv-otros">Otros</label>
									<input type="text"  name="serv-otros" maxlength="15">
								</li>
							</div>
						<!--******METODO CHKBOX******* -->	
							<div class="metodo">
								<p>Metodo</p>
								<li>
									<input type="checkbox" name="metodo[]" value="SAAS">
									<label for="saas">SAAS</label>
								</li>

								<li>
									<input type="checkbox" name="metodo[]" value="S. Factory">
									<label for="sfactory">S. Factory</label>
								</li>
							</div>
						<!--******MOTIVOS DE VISITA CHKBOX******* -->	

							<div class="motivo">
								<p>Motivo de visita</p>
								<li>
									<input type="checkbox" name="motivo[]" value="Presupuesto">
									<label for="presupuesto">Presupuesto</label>
								</li>

								<li>
									<input type="checkbox" name="motivo[]" value="Cont. Tecnico">
									<label for="tecnico">Cont. Tecnico</label>
								</li>

								<li>
									<input type="checkbox" name="motivo[]" value="Demo" > 
									<label for="demo">Demo</label>
								</li>

								<li>
									<input type="checkbox" name="motivo[]" value="MOtros">
									<label for="motiv-otros">Otros</label>
									<input type="text" name="motivs-otros" maxlength="15">
								</li>


							</div>

						</ul>
					</li>
				
				</ul>
				
			
		</div>	

		
		<div class="caja obs">
			<p>Observasiones</p>
			<textarea name="observasiones"  class="observasiones" cols="30" rows="10"></textarea>
			<input type="submit" class="boton" value="SUBMIT">

		</div>
		
	</form>
	</div>
<script src="js/only-one-checkbox.js"></script>
</body>
</html>