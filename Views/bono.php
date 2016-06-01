<!--este es para que pueda mostrar los datos de esta tabla en internet.
este es una conexion por haci desirlo-->
<?php
require_once("../Model/coneXion.php");
require_once("../Model/bono.class.php");

//este es para mostrar bono
$bono= bono::mostrar_bono();

//este es para modificar bono
//$intento= bono::modificar();
?>


<!--espacio del titulo titulo-->
<div class="titulo_bono">
  <h1>Bono</h1>
</div>
<!--contenedor del formulario-->
<div class="formulario">
<!--aqui esta el formato y de esta de esta forma se hace -->
  <form action="../Controller/bono.controller.php" method="post">

    <label>Código: </label>
    <input type="text" name="bono_cod"/>
    </br>
    </br>
    <label>Código de categoria de bono: </label>
    <input type="text" name="cat_bono_cod"/>
    </br>
    </br>
    <label>Codigo de punto: </label>
    <input type="text" name="pto_cod"/>
    </br>
    </br>
    <label>Descripción de bono:</label>
    <input type="text" name="bono_desc"/>
    </br>
    </br>
    <label>Cantidad de bonos:</label>
    <input type="text" name="bono_cant"/>
    </br>
    </br>
    <!--este es el boton-->
    <button name="action" value="guardarbono">Guardar</button>
  </form>
</div>

<!--estes es el proceso pra que aparesca y se pueda mostrar-->
<div class="tablabono">
  <table border="1px">
    <thead>
      <th colspan="5">Informacion de bonos</th>
      <tr>
        <td>Codigo</td>
        <td>Codigo caterogia bono</td>
        <td>Codigo punto</td>
        <td>Descripcion</td>
        <td>Cantidad</td>
      </tr>
    </thead>
    <tbody>
        <?php
          foreach ($bono as $bn) {
            echo "<tr>
                    <td>".$bn["bono_cod"]."</td>
                    <td>".$bn["cat_bono_cod"]."</td>
                    <td>".$bn["pto_cod"]."</td>
                    <td>".$bn["bono_desc"]."</td>
                    <td>".$bn["bono_cant"]."</td>
            </tr>";
          }
         ?>
    </tbody>
  </table>
</div>
