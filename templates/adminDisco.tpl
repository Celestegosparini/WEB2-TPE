
{include file="header.tpl" seccion="adminDisco"}
<div class="container">
    <div class="row">
      <div class="col-12">
        <hr/>
         <h1 class="tituloIndex">Cargar - Editar - Borrar discos</h1>
        <hr/>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
      {foreach from=$tablaDiscos item=disco}
        <tr>
          <td>{$disco['nombre']}</td>
          <td>${$disco['precio']}</td>
          <td><a href="borrarDisco/{$disco['id']}">Borrar</a></td>
          <td><a href="editarDisco/{$disco['id']}">Editar</a></td>
         </tr>
      {/foreach}
  </tbody>
</table>
  </div>
 </div>
</div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <hr/>
          <h2 class="tituloIndex">Cargar Disco</h2>
          <hr/>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
      <form method="post" action="agregarDisco">
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
  </div>
</div>

{include file="footer.tpl"}
