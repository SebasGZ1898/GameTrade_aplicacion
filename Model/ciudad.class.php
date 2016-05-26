<?php


class Gestion_Ciudad
{
	
	function guardar($ciu_codigo,$ciu_nombre,$ciu_departamento){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "INSERT INTO tbl_consola (ciu_cod,ciu_nom,depar_cod) values (?,?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($ciu_codigo,$ciu_nombre,$ciu_departamento));

		ConexionBD::DesconectarBD();

	}
}

?>