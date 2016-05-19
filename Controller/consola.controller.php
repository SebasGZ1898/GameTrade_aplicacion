<?php
require_once("conexion.php");
require_once("usuario.class.php");

$accion=$_REQUEST["action"];
 switch ($accion) {
 	case 'guardarconsola':
 		 
 		 $usu_nombre=$_POST["txtCodigo"];
 		 $usu_apellido=$_POST["txtName"];

 		 try {
 		 	Gestion_Consola::Guardar($usu_nombre,$usu_apellido);
 		 	echo "Guardar con exito";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;
 	
 	default:
 		# code...
 		break;
 }
?>