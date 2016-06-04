<?php
session_start();
if (!isset($_SESSION['usu_nom']))	 {
	header("Location:admin.php");
}

require_once("../Model/conexion.php");
include("../Model/juego_admi.class.php");

$Mconsol=Gestion_Videojuego::mostrarConsol();
$Mcategoria=Gestion_Videojuego::mostrarCategoria();
$Mjuego=Gestion_Videojuego::mostrarjuego();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="stylesSheet/gstyle_admi.css"/>
	<link rel="stylesheet" type="text/css" href="stylesSheet/estilo.css"/>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/gmindex_admi.js"></script>

</head>
<body>
<?php include("header_admi.php");?>

<section id="stMain">
	<div id="dvPhoto"><?php echo $_SESSION['photoUsu']; ?></div>
	<div id="dvWelcome">BIENVENIDO</div>
	<div id="dvAdm"><?php echo $_SESSION['usu_nom']; ?></div>
</section>
<section id="stA_User">
usuario
</section>

<section id="stA_Game">
	<article id="artLeftjuego">
		<div id="dvSeach">
			<input id="txtSeach" placeholder="Buscar juego" type="text"/>
			<div id="logSeach"></div>
		</div>
		<select id="cbCargajue" size="25">
			<?php

				foreach ($Mjuego as $juego) {
					echo "<option value=".$juego["jue_cod"].">".$juego["jue_nom"]."</option>";
				}

			?>

		</select>
	</article>
	<article id="artCenterjuego">
		<h2>Juegos</h2>
		<div id="dvCont">
			<ul id="ulMenujuego">
				<li onclick="sbJueAdmi('1')" id="liNew">Nuevo</li>
				<li onclick="sbJueAdmi('2')" id="liEdit" >Modificar</li>
				<li onclick="sbJueAdmi('3')" id="liSave">Guardar</li>
				<li onclick="sbJueAdmi('4')" id="liCancel">Cancelar</li>
			</ul>
			<fieldset>
				<legend>Agregar</legend>
				<form action="../Controller/juego_admin.controller.php" method="post">
					<ul id="ulAjuego">
					<li><label>Cedula usuario</label><input type="text" name="txtUsuario" id="txtUsuario" disabled /></li>
					<li><label>Codigo Juego</label><input type="text" name="txtCodigo" id="txtCodigo" disabled /></li>
					<li><label>Codigo Consola</label>
						<select id="cbConsol" name="cbConsol" id="cbConsol" disabled>
							<?php
								echo "<option>Seleccionar</option>";

								foreach ($Mconsol as $consol) {
									echo "<option value=".$consol["cons_cod"].">".$consol["cons_nom"]."</option>";
								}

							?>
						</select>
					</li>
					<li><label>Codigo Categoria</label>
						<select id="cbCategor" name="cbCategor" id="cbCategor" disabled>
							<?php
								echo "<option>Seleccionar</option>";

								foreach ($Mcategoria as $categor) {
									echo "<option value=".$categor["cat_cod"].">".$categor["cat_nom"]."</option>";
								}

							?>
						</select>
					</li>
					<li><label>Nombre Videojuego</label><input type="text" id="txtName" name="txtName" disabled="disabled" /></li>
					<li><label>Descripcion </label><input type="text" name="txtDetail" id="txtDetail" disabled="disabled" /></li>
					<li><label>Cantidad</label><input type="text" name="txtCantidad" id="txtCantidad" disabled="disabled" /></li>
					<li><label>Imagen </label><input type="text" name="txtImagen" id="txtImagen" disabled="disabled" /></li>
					<li><label>Trailer</label><input type="text" name="txtTrailer" id="txtTrailer" disabled="disabled" /></li>
					<li><label>Estado</label><input type="text" name="txtEstado" id="txtEstado" disabled="disabled" /></li>
					<li><label>Fecha publicidad</label><input type="date" name="txtFecha" id="txtFecha" disabled="disabled" /></li>
					<li><label>Palabras claves</label><input type="text" name="txtClaves" id="txtClaves" disabled="disabled" /></li>
					<li><button name="action" value="juego_admi">Enviar</button></li>
					</ul>
				</form>
			</fieldset>

		</div>
	</article>
</section>

<section id="stA_Categoria">
<?php require("Categoria_jue.php"); ?>
</section>

<section id="stA_Encuesta">
<?php require("departamento.php"); ?>
</section>

<section id="stA_Sancion">
<?php require("pais.php"); ?>
</section>


<section id="stA_Puntos">
<?php require("puntos.php"); ?>
</section>

<section id="stA_Bono">
	<?php require("bono.php"); ?>
</section>

<section id="stA_Consola">
	<?php require("admin_consola.php"); ?>
</section>






<section id="stA_Puntosjue">
<?php require("ciudad.php"); ?>
</section>

<section id="stA_Inform">
<h2>Todavia no se han creado los informes</h2>
</section>

</body>
</html>
