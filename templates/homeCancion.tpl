{include file="header.tpl"}
<table class="table table-dark" id="tablaCancion">
<thead>
<tr>
  <th scope="col">Nombre</th>
  <th scope="col">Duracion</th>
  <th scope="col">Eliminar</th>
</tr>
</thead>
<tbody>


  {foreach from=$Canciones item=cancion}
    <tr>
      <td>{$cancion['nombreCancion']}</td>
      <td>{$cancion['duracion']}</td>
      <td><a href="borrarCancion/{$cancion['idCancion']}">BORRAR</a></td>
     </tr>
  {/foreach}

</tbody>
</table>


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
      <label for="discoForm">Disco</label>
<select class="form-control" id="discoForm" name="discoForm">
  {foreach from=$Discos item=disco}
      <option value="{$disco['id']}"> {$disco['nombre']}</option>
      

  {/foreach}

</select>
    </div>
    <button type="submit" class="btn btn-primary">Cargar Cancion</button>
  </form>
</div>
{include file="footer.tpl"}
