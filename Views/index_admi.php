<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="stylesSheet/gstyle_admi.css"/>
	<link rel="stylesheet" type="text/css" href="stylesSheet/estilo.css"/>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/gmindex_admi.js"></script>
	<script type="text/javascript" src="js/gmindex_admi.js"></script>
</head>
<body>
<?php include("header_admi.php");?>

<section id="stMain">
	<div id="dvPhoto"></div>
	<div id="dvWelcome">BIENVENIDO</div>
	<div id="dvAdm">Sebastian</div>
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
		<select id="cbCargajue" size="25"></select>
	</article>
	<article id="artCenterjuego">
		<h2>Juegos</h2>
		<div id="dvCont">
			<ul id="ulMenujuego">
				<li>Nuevo</li>
				<li>Modificar</li>
				<li>Guardar</li>
				<li>Cancelar</li>
			</ul>
			<fieldset>
				<legend>Agregar</legend>
					<ul id="ulAjuego">
					<li><label>Juego codigo</label><input type="text" disabled="disabled" /></li>
					<li><label>Codigo Consola</label><input type="text" disabled="disabled" /></li>
					<li><label>Codigo Categoria</label><input type="text" disabled="disabled" /></li>
					<li><label>Nombre Videojuego</label><input type="text" disabled="disabled" /></li>
					<li><label>Descripcion </label><input type="text" disabled="disabled" /></li>
					<li><label>Cantidad</label><input type="text" disabled="disabled" /></li>
					<li><label>Imagen </label><input type="text" disabled="disabled" /></li>
					<li><label>Trailer</label><input type="text" disabled="disabled" /></li>
					<li><label>Estado</label><input type="text" disabled="disabled" /></li>
					<li><label>Fecha publicidad</label><input type="text" disabled="disabled" /></li>
					<li><label>Palabras claves</label><input type="text" disabled="disabled" /></li>
					</ul>
			</fieldset>	
			
		</div>
	</article>
</section>
<section id="stA_Bono">
	<?php require("bono.php"); ?>
</section> 
<section id="stA_Consola">
	<?php require("admin_consola.php"); ?>
</section>
<section id="stA_Categoria">
<?php require("Categoria_jue.php"); ?>
</section>
<section id="stA_Puntos">
<?php require("puntos.php"); ?>
</section>

<section id="stA_Encuesta">
encuesta
</section>
<section id="stA_Sancion">
sancion
</section>
<section id="stA_Puntosjue">
puntosjue
</section>
<section id="stA_Inform">
<h2>Todavia no se han creado los informes</h2>
</section>

</body>
</html>