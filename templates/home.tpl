{include file="header.tpl"}

    <table class="table table-dark" id="tablaDisco">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>


      {foreach from=$Discos item=disco}
        <tr>
          <td>{$disco['nombre']}</td>
          <td>{$disco['precio']}</td>
          <td><a href="borrar/{$disco['id']}">BORRAR</a></td>
         </tr>
      {/foreach}

  </tbody>
</table>


    <div class="container">
      <h2>Cargar Disco</h2>
      <form method="post" action="agregar">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Precio</label>
          <input type="text" class="form-control" id="precioForm" name="precioForm">
        </div>
        <button type="submit" class="btn btn-primary">Cargar Disco</button>
      </form>
    </div>

  


{include file="footer.tpl"}
