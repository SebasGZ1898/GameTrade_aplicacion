<?php
include_once("../Model/conexion.php");
include_once("../Model/validarUsu.class.php");

$accion= $_POST["btnusu"];

switch ($accion) {
	case 'ingresoUsu':
		
		$usuario=$_POST["txtCode"];
		$clave=$_POST["txtName"];

		try {
			$result=Gestionar_Usu::validarUsu($usuario,$clave);
			
			$_SESSION['usu_nom'] =$result['usu_nom']; 
			header("location:../Views/userperfil.php");
		} catch (Exception $e) {
			echo $e;
		}
		break;
}

?>