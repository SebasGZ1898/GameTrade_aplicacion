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
	<div id="dvPhoto"></div>
	<div id="dvWelcome">BIENVENIDO</div>
	<div id="dvAdm">Sebastian</div>
</section>
<section id="stA_User">
usuario
</section>

<section id="stA_Game">
	<article>
		
	</article>
	<article>
		<h2>Juegos</h2>
		<div>
			<ul>
				<li>Nuevo</li>
				<li>Modificar</li>
				<li>Guardar</li>
				<li>Cancelar</li>
			</ul>
			<fieldset>
				<legend>Agregar</legend>
				<label>Juego codigo</label>
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
categorias
</section>
<section id="stA_Puntos">
puntos
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