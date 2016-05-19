<?php
require_once("conexion.php");
require_once("usuario.class.php");

$accion=$_REQUEST["action"];
 switch ($accion) {
 	case 'guardarconsola':
 		 
 		 $cod_consola=$_POST["txtCodigo"];
 		 $cod_nombre=$_POST["txtName"];
 		 $cod_referencia=$_POST["txtReferencia"];

 		 try {
 		 	Gestion_Consola::Guardar($cod_consola,$cod_nombre,$cod_referencia);
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