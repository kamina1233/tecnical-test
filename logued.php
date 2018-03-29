<?php 
	session_start();
	//se verifica que el usuari tenga una sesion activa 
	if (isset($_SESSION["current_id"]) && $_SESSION["current_id"] == true){
		


	}//en el caso que no este se le avisa y se lo devuelve a la pantalla de loguin
	else{
			echo "<script  type='text/javascript'>";
			echo "alert('No estas logueado');";
			echo "</script>";
			echo "<br/>" . "<a href='index.php'>volver al Login</a>";
			exit;
		}
	//archivo con las variables de los campos para manda los registros a la DB
	include("VariablesForm.php");
	//archivo con las variables de los campos para consultar los registros a la DB
	include("buscarregistro.php");
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario de usuario ingresado</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
	<link rel="stylesheet" href="css/styleLoged.css">
	<!-- scritp para poner los prefijos de stilo automaticamente para los navegadores desactualizados -->
	<script type="text/javascript" src="js/prefixfree.min.js"></script>
	<script type="text/javascript" src="js/jquery-latest.js"></script>
	
	
	
</head>
<body>
	
	<div class="header">
	<h1 class="user"><a href="#">Bienvenido Usuario -(<?php echo $_SESSION['current_user']; ?>)-</a></h1>
      <ul class="main-nav">
         
          <!-- se utiliza para que el usuario cierre sesion -->
          <li><a href="logout.php">SALIR!!!</a></li>
         
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
									<input type="checkbox" name="servicio[]" value="Consultoria" checked="" />
									<label for="consultoria">Consultoria</label>
								</li>
						
								<li>
									<input type="checkbox" name="servicio[]" value="Simuladores" />
									<label for="simuladores">Simuladores</label>
								</li>

								<li>
									<input type="checkbox" name="servicio[]" value="Sist. de Gestion"required/>
									<label for="gestion">Sist. de Gestion</label>
								</li>
	
								<li>
									<input type="checkbox" name="servicio[]" value="SOtros" />
									<label for="serv-otros">Otros</label>
									<input type="text"  name="serv-otros" maxlength="15">
								</li>
							</div>
						<!--******METODO CHKBOX******* -->	
							<div class="metodo">
								<p>Metodo</p>
								<li>
									<input type="checkbox" name="metodo[]" value="SAAS" checked="" />
									<label for="saas">SAAS</label>
								</li>

								<li>
									<input type="checkbox" name="metodo[]" value="S. Factory" />
									<label for="sfactory">S. Factory</label>
								</li>
							</div>
						<!--******MOTIVOS DE VISITA CHKBOX******* -->	

							<div class="motivo">
								<p>Motivo de visita</p>
								<li>
									<input type="checkbox" name="motivo[]" value="Presupuesto" checked="" >
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
									<input type="checkbox" name="motivo[]" value="MOtros" >
									<label for="motiv-otros">Otros</label>
									<input type="text" name="motivs-otros" maxlength="15">
								</li>


							</div>

						</ul>
					</li>
				
				</ul>
				
			
		</div>	

		<!-- caja de observaciones -->
		<div class="caja obs">
			
			<textarea name="observaciones"  class="observasiones" cols="30" rows="10" placeholder="INGRESESE LAS OBSERVACIONES EN ESTE CAMPO"></textarea>
			<input type="submit" class="button" value="SUBMIT" id="btn">
			
		</div>
		
	</form>
	</div>


	

</div>
<!-- ventana emergente que muestra los registros que mando el usuario a la DB -->
<div class="modalBtn">

	<button id="modalBtn" class="button">Registros cargados</button>
	<h1>Mostrar los registros cargados</h1>
</div>
	<div id="simpleModal" class="modal">

		<div class="modal-content">
			<span class="closeBtn">&times;</span>
			<table>

					<td>ID de Usuario</td>
					<td>Nombre</td>
					<td>Cargo</td>
					<td>Empresa</td>
					<td>Email</td>
					<td>Telefono</td>
					<td>OBS</td>
					<td>Tipo deServicio</td>
					<td>Metodo</td>
					<td>Motivo</td>
					<td>Fecha</td>
					
					<!-- se utiliza para recorrer el array donde estan almacenados los datos que devolvio la query para mostrarlos en la ventana emergente -->
					<?php 	while($row = mysqli_fetch_array($result)) { ?>
	
			<tr>
				<td class= "row"><?php echo $row['user_id']; ?></td>
				<td class= "row"><?php echo $row['empresa_nombre']; ?></td>
				<td class= "row"><?php echo $row['emprea_cargo']; ?></td>
				<td class= "row"><?php echo $row['empresa_empresa']; ?></td>
				<td class= "row"><?php echo $row['empresa_email']; ?></td>
				<td class= "row"><?php echo $row['empresa_telefono']; ?></td>
				<td class= "row"><?php echo $row['empresa_obs']; ?></td>
				<td class= "row"><?php echo $row['chk_servicio']; ?></td>
				<td class= "row"><?php echo $row['chk_metodo']; ?></td>
				<td class= "row"><?php echo $row['chk_motivo']; ?></td>
				<td class= "row"><?php echo $row['fecha']; ?></td>
			</tr>
			<?php } ?>


				</tr>
			</table>
		</div>
	</div>
<!-- script para que el usuario solo puede seleccionar un checkbox -->
<script src="js/only-one-checkbox.js"></script>
<!-- script que da las funciones a la ventana emergente de registros -->
<script src="js/modal.js"></script>

</body>
</html>