<?php
require_once("../Model/conexion.php");
require_once("../Model/RegistroUsu.class.php");

$accion=$_REQUEST["action"];
 switch ($accion) {
 	case 'AgregarUsuario':
 		 
 		 $cod_consola=$_POST["cbTipDocum"];
 		 $cod_nombre=$_POST["numDocument"];
 		 $cod_referencia=$_POST["nameRegist"];
 		 $cod_estado=$_POST["lastRegist"];
 		 $cod_imagen=$_POST["bornRegist"];

 		 $cod_imagen=$_POST["phoneRegist"];
 		 $cod_imagen=$_POST["CelphoneRegist"];
 		 $cod_imagen=$_POST["addressRegist"];
 		 $cod_imagen=$_POST["cbCiudad"];
 		 $cod_imagen=$_POST["emailRegist"];

 		 $cod_imagen=$_POST["nickRegist"];
 		 $cod_imagen=$_POST["passRegist"];
 		 $cod_imagen=$_POST["photoRegist"];


 		 try {
 		 	Gestion_Consola::Guardar($cod_consola,$cod_nombre,$cod_referencia,$cod_estado,$cod_imagen);
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