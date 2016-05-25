<?php
//aqui se hace la conecion entre la parte que recoge los datos y la base de datos
require_once("conexion.php");
require_once("bono.class.php");

$accion=$_REQUEST["action"];
switch ($accion) {
  case 'guardarbono':

//en esta parte se guardan los datos en la variable guardarbono que esta encima
  $bono_cod=$_POST["txtcodigo"];
  $cat_bono_cod=$_POST["txtcat_bono"];
  $pto_cod=$_POST["txtpto_cod"];
  $bono_desc=$_POST["txtdescripcion"];
  $bono_cant=$_POST["txtcantidad"];

  //se validan los datos, y le verificamos al usuario si esta guardado o no
  try {
    Gestion_bono::guardar($bono_cod,$cat_bono_cod,$pto_cod,$bono_desc,$bono_cant);
    echo "Guardado";

  } catch (Exception $e) {
    echo "no se guardo" +$e;

  }

      break;
}
 ?>
