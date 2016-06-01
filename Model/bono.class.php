<!--aqui recojemos los datos y los llevamos a la base de datos-->
<?php
class bono{
  function guardar($bono_cod,$cat_bono_cod,$pto_cod,$bono_desc,$bono_cant){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO tb_bono(bono_cod,cat_bono_cod,pto_cod,bono_desc,bono_cant) values(?,?,?,?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($bono_cod,$cat_bono_cod,$pto_cod,$bono_desc,$bono_cant));

    ConexionBD::DesconectarBD();

  }
//se hace la consulta a la tabla para mostrar datos
  function mostrar_bono(){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tb_bono";

    $query= $pdo->prepare($sql);
    $query->execute();

    $result= $query->fetchALL(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;

  }


}

  ?>
