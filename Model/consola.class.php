<?php


class Gestion_Consola
{
	
	function guardar($cod_consola,$cod_nombre){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "INSERT INTO usuarios (usu_nom,usu_ape) values (?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($cod_consola,$cod_nombre));

		ConexionBD::DesconectarBD();

	}
}

?>