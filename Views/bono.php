/*hacemos que css pueda trabajar en php*/
<link type="text/css" rel="stylesheet" href="estilo.css">
<meta charset="utf-8">

/*aqui esta el formato y de esta de esta forma se hace */
<div class="formulario">
  <form action="bonoController.php" method="post">
  <h1>bono</h1>
  <label>Código: </label>
  <input type="text" name="bono_cod"/>
  <label>Codigo de punto: </label>
  <input type="text" name="pto_cod"/>
  <label>Descripción de bono:</label>
  <input type="text" name="bono_desc"/>
  <label>Cantidad de bonos:</label>
  <input type="text" name="bono_cant"/>
  /*este es el boton*/
  <button name="action" value="guardarbono">Guardar</button>
  </form>

</div>
