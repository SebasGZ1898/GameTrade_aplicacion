<!--aqui esta el formato y de esta de esta forma se hace -->

<div class="titulo_bono">
  <h1>Bono</h1>
</div>
<div class="formulario">

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
