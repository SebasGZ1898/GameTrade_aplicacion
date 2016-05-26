<?php


class Gestion_Departamento
{
	
	function guardar($cod_departamento,$departamento_nombre, $codigo_pais){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "INSERT INTO tbl_departamento (depar_cod,depar_nom) values (?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($cod_departamento,$departamento_nombre, $codigo_pais));

		ConexionBD::DesconectarBD();

	}
}

?>