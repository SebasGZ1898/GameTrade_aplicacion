<!--Esto es el formulario de la categoría del juego-->

<div class="Categoria">
  <form class="categoria_frm" action="categoria.controller" method="post">
    <h1 id="Cat">Categor&iacute;a del juego</h1>
    <label>Ingresa código:</label>
    <input type="text" name="cat_cod_txt">
    </br></br>
    <label>Nombre:</label>
    <input type="text" name="cat_nom_txt">
    </br></br>
    <label>Fecha:</label>
    <input type="text" name="cat_fech_txt">
    </br></br>
    <label>Descripcion:</label>

    <!--Esto es un campo de texto largo, en donde se ingresa la descripción:-->

    <textarea name="Descripcion" rows="5" cols="30"></textarea>
    </br></br>
    <label>Estado:</label>
    </br>
    <!--Este es un "select", es un dropdown list. Para seleccionar el estado del usuario:-->
    <select name="Estado_slct">
      <option value="Activo">Activo</option>
      <option value="Inactivo">Inactivo</option>
    </select>

  </br></br>

    <!--Esto es el botón para guardar los datos de la categoría del juego:-->
    <input type="button" name="Guardar_btn" value="Guardar">
  </form>

</div>
