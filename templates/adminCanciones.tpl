{include file="header.tpl" seccion="adminCancion"}
<p class="prueba">prueva</p>
<div class="tablaCancion">
<table class="table table-dark">
<thead>
<tr>
  <th scope="col">Nombre</th>
  <th scope="col">Duracion</th>
  <th scope="col">Disco</th>
  <th scope="col">Eliminar</th>
  <th scope="col">Editar</th>
</tr>
</thead>
<tbody>


  {foreach from=$canciones item=cancion}
    <tr>
      <td>{$cancion['nombreCancion']}</td>
      <td>{$cancion['duracion']}</td>
      <td>{$cancion['idDisco']}</td>
      <td><a href="borrarCancion/{$cancion['id']}">BORRAR</a></td>
      <td><a href="editarCancion/{$cancion['id']}">BORRAR</a></td>
     </tr>
  {/foreach}

</tbody>
</table>
</div>

    <div class="container">
      <h2>Cargar Cancion</h2>
      <form method="post" action="agregarCancion">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreCancionForm" name="nombreCancionForm">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Duracion</label>
          <input type="text" class="form-control" id="duracionForm" name="duracionForm">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Disco</label>
          <select class="form-control" id="idDiscoForm" name="idDiscoForm">
  {foreach from=$Discos item=disco}
      <option value="{$disco['id']}"> {$disco['nombre']}</option>
  {/foreach}

        </select>
        </div>
        <button type="submit" class="btn btn-primary">Cargar Cancion</button>
      </form>
    </div>
{include file="footer.tpl"}
