<!--Se recojen los datos para envíarlos a la Base de Datos-->
<?php
class Categoria_jue{
  function guardar($cat_cod, $cat_nom, $cat_fech, $cat_desc, $cat_estado){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO tbl_categoria_jue(cat_cod, cat_nom, cat_fech, cat_desc, cat_estado) values(?,?,?,?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($cat_cod, $cat_nom, $cat_fech, $cat_desc, $cat_estado));

    ConexionBD::DesconectarBD();
	}
}
?>
