<!--aqui esta el formato y de esta de esta forma se hace -->
<div class="formulario">
  <form action="../Controller/bono.controller.php" method="post">
  <h1>Bono</h1>
  <label>Código: </label>
  <input type="text" name="bono_cod"/>
  <label>Código de categoria de bono: </label>
  <input type="text" name="cat_bono_cod"/>
  <label>Codigo de punto: </label>
  <input type="text" name="pto_cod"/>
  <label>Descripción de bono:</label>
  <input type="text" name="bono_desc"/>
  <label>Cantidad de bonos:</label>
  <input type="text" name="bono_cant"/>
  <!--este es el boton-->
  <button name="action" value="guardarbono">Guardar</button>
  </form>

</div>
