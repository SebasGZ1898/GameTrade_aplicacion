<header>
	<div id="dvLogo"></div>
	<div id="dvContel">
		<div id="invitLogin">Ingresa ya a nuestra pagina</div>
		<div id="dvLogin">
			<form action="../Controller/ValidarUsu.Controller.php" method="post">
			<ul id="Login">
				<li id="dvCode"><input type="text" placeholder="Nick" name="txtCode" id="txtCode" required="required"/></li>
				<li><input type="password" placeholder="*************" name="txtName" id="txtName" required="required" /></li>
			</ul>
			<div id="dvButonL"><button  name="btnusu" id="btnOpen" value="ingresoUsu"></button></div>
			</form>
			</div>

		<ul id="ulRecord">
			<li>Olvide mi Contraseña</li>
			<li>Registrate</li>
		</ul>
	</div>
</header>
<ul id="dvMenu">
	<li id="code" onclick="sb_menu('home')"></li>
	<li id="liwor" onclick="sb_menu('wor')"></li>
	<li id="licontact" onclick="sb_menu('contact')"></li>
	<li id="liUsa" onclick="sb_menu('usa')"></li>
</ul>
<!--<nav>
	<ul id="ulMenu">
		<li>Inicio</li>
		<li>Quienes Somos</li>
		<li>Contactenos</li>
		<li>Como se usa</li>
	</ul>
</nav>-->