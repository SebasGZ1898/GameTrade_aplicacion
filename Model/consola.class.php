<?php


class Gestion_Consola
{
	
	function guardar($cod_consola,$cod_nombre,$cod_referencia){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "INSERT INTO consola (cons_cod,cons_nom,cons_refer) values (?,?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($cod_consola,$cod_nombre,$cod_referencia));

		ConexionBD::DesconectarBD();

	}
}

?>