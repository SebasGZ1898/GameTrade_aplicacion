<?php
//aqui se hace la conexion entre la parte que recoge los datos y la base de datos
require_once("../Model/conexion.php");
require_once("../Model/bono.class.php");

$accion=$_REQUEST["action"];
switch ($accion) {

  case 'guardarbono':

//en esta parte se guardan los datos en la variable guardarbono que esta encima
  $bono_cod=$_POST["bono_cod"];
  $cat_bono_cod=$_POST["cat_bono_cod"];
  $pto_cod=$_POST["pto_cod"];
  $bono_desc=$_POST["bono_desc"];
  $bono_cant=$_POST["bono_cant"];

  //se validan los datos, y le verificamos al usuario si esta guardado o no
  try {
    bono::guardar($bono_cod,$cat_bono_cod,$pto_cod,$bono_desc,$bono_cant);
    echo "Guardado";

  } catch (Exception $e) {
    echo "No se guardo".$e;

  }

      break;

      case 'modificar':
        $cat_bono_cod=$_POST["cat_bono_cod"];
        $pto_cod=$_POST["pto_cod"];
        $bono_desc=$_POST["bono_desc"];
        $bono_cant=$_POST["bono_cant"];
        $bono_cod=$_POST["bono_cod"];

        try {
          bono::modificar($cat_bono_cod,$pto_cod,$bono_desc,$bono_cant,$bono_cod);
          echo "se ha modifico";
          header("location:../Views/index_admi.php");
        }
        catch (Exception $e){
            echo "Ocurrio un error".$e ;
        }

        break;
}
 ?>
