<?php
require_once("../Model/conexion.php");
include("../Model/ciudad.class.php");

$ciudad=Gestion_Ciudad::cargarciudad();

echo $ciudad;
?>


<!DOCTYPE html>
<head>
	<title>Registro</title>
		<meta charset="utf8"/>
		<link rel="stylesheet" type="text/css" href="stylesSheet/gstyle.css"/>
		<link rel="stylesheet" type="text/css" href="stylesSheet/registro.css"/>

		<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="js/gweb.js"></script>
</head>
<body>

	<div id="dv_main">
	<?php require_once("header.php"); ?>
<div id="e64ContRegist">
	<form action="../Controller/registro.controller.php" method="post">
		<ul id="ulContRegist">
			<li><label for="">Tipo de documento</label>
				<select name="cbTipDocum">
					<option value="0">Seleccionar</option>
					<option value="1">Cedula de Ciudadania</option>
					<option value="2">Tarjeta de Identidad</option>
					<option value="3">Cedula de Estranjeria</option>
				</select>
			</li>
			<li><label for="numDocument">Numero de Documento</label><input type="number" name="numDocument" required/></li>
			<li><label for="">Nombre Completo</label><input type="text" name="nameRegist" required/></li>
			<li><label for="">Apellido Completo</label><input type="text" name="lastRegist" required/></li>
			<li><label for="">Fecha de nacimiento</label><input type="date" name="bornRegist" required/></li>
			<li><label for="">Telefono</label><input type="number" name="phoneRegist"/></li>
			<li><label for="">Celular</label><input type="number" name="CelphoneRegist"/></li>
			<li><label for="">Direccion</label><input type="text" name="addressRegist" required/></li>
			<li><label for="">Ciudad</label>
				<select name="cbCiudad">
					<?php
							echo "<option value='0'>Seleccionar</option>";
						foreach ($ciudad as $ciu ) {
							echo "<option value=".$ciu["ciu_cod"].">".$ciu["ciu_nom"]."</option>";
						}

					?>
				</select>
			</li>
			
			<li><label for="">Correo Electronico</label><input type="email" name="emailRegist" required/></li>
			<li><label for="">Usuario</label><input type="text" name="nickRegist" required/></li>
			<li><label for="">Contraseña</label><input type="password" name="passRegist" required/></li>
			<li><label for="">Photo</label><input type="file" name="photoRegist"/></li>
			<li><button name="action" value="AgregarUsuario">Guardar</button></li>
		</ul>
	</form>
</div>
</div>
</body>
</html>