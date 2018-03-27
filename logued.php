<?php 
	session_start();
	
	if (isset($_SESSION['id']) && $_SESSION['id'] == true)
{

}


else
{
echo "<br/>" . "No te Logeaste" . "<br/>";
echo "<br/>" . "<a href='index.php'>volver al Login</a>";

exit;
}


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario de usuario ingresado</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
	<link rel="stylesheet" href="css/styleLoged.css">
	<script src="js/prefixfree.min.js" type="text/javascript"></script>
</head>

<body>
	<div class="header">
	<h1 class="user"><a href="#">User</a></h1>
      <ul class="main-nav">
          <li><a href="#">Funcion?</a></li>
          
          <li><a href="logout.php">SALIR!!!</a></li>
          
      </ul>
	</div> 

	
	<div class="contenedor">
		<div class="caja form">
			<form action="">
				<ul> 
					<!-- Formulario para rellenar las visitas -->
					
						<li>
							<label for="nombre">Nombre</label>
							<input type="text" class="input-nombre" id="nombre" placeholder="Ingrese Nombre" required/>
						</li>

						<li>
							<label for="cargo">Cargo</label>
							<input type="text" class="input-cargo" id="cargo" placeholder="Ingrese el Cargo empresarial"required/>	
						</li>

						<li>
							<label fors="empresa">Empresa</label>
							<input type="text" class="input-empresa" id="empresa" placeholder="Ingrese nombre de la empresa"required/>
						</li>

						<li>
							<label for="email">E-mail</label>
							<input type="text" class="input-email" id="email" placeholder="ingrese direccion de E-mail"required/>
						</li>
	
						<li>
							<label for="telefono">Telefono</label>
							<input type="text" class="input-telefono" id="telefono" placeholder="Ingrese numero de telefono de la empresa" required/>
						</li>
					</div>

					<!--********* CHECKBOX ************* -->		
						
					<li>
						<ul>
							<div>
						<!--******SERVICOS CHKBOX******* -->	
								<p>Tipo de servicio</p>
								<li>
									<input type="checkbox" name="consultoria" id="consultoria">
									<label for="consultoria">Consultoria</label>
								</li>
						
								<li>
									<input type="checkbox" name="simuladores" id="simuladores">
									<label for="simuladores">Simuladores</label>
								</li>

								<li>
									<input type="checkbox" name="Gestion" id="gestion">
									<label for="gestion">Sist. de Gestion</label>
								</li>
	
								<li>
									<input type="checkbox" name="serv-otros" id="serv-otros">
									<label for="serv-otros">Otros</label>
									<input type="text" id="serv-otros" name="serv-otros">
								</li>
							</div>
						<!--******METODO CHKBOX******* -->	
							<div>
								<p>Metodo</p>
								<li>
									<input type="checkbox" name="saas" id="saas">
									<label for="saas">SAAS</label>
								</li>

								<li>
									<input type="checkbox" name="sfactory" id="sfactory">
									<label for="sfactory">S. Factory</label>
								</li>
							</div>
						<!--******MOTIVOS DE VISITA CHKBOX******* -->	

							<div>
								<p>Motivo de visita</p>
								<li>
									<input type="checkbox" name="presupuesto" id="presupuesto">
									<label for="presupuesto">Presupuesto</label>
								</li>

								<li>
									<input type="checkbox" name="tecnico" id="tecnico">
									<label for="tecnico">Cont. Tecnico</label>
								</li>

								<li>
									<input type="checkbox" name="demo" id="demo"> 
									<label for="demo">Demo</label>
								</li>

								<li>
									<input type="checkbox" name="motiv-otros" id="motiv-otros">
									<label for="motiv-otros">Otros</label>
									<input type="text" id="motiv-otros" name="motiv-otros">
								</li>


							</div>

						</ul>
					</li>
				</ul>
				
			</form>
		</div>	

		
		<div class="caja obs">
			<p>Observasiones</p>
			<textarea name="observasiones" id="observasiones" class="observasiones" cols="30" rows="10"></textarea>
			<input type="button" class="boton" value="SUBMIT">

		</div>
		

	</div>

</body>
</html>