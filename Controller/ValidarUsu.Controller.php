<?php
include_once("../Model/conexion.php");
include_once("../Model/validarUsu.class.php");

$accion= $_POST["btnusu"];
echo "aaaa";
switch ($accion) {
	case 'ingresoUsu':
		echo "pasa";
		$usuario=$_POST["txtCode"];
		$clave=$_POST["txtName"];
echo $clave;
		try {
			$result=Gestionar_Usu::validarUsu($usuario,$clave);
			
			$_SESSION['usu_nom'] =$result['usu_nom']; 
			//header("location:../Views/userperfil.php");
		} catch (Exception $e) {
			echo $e;
		}
		break;
}

?>