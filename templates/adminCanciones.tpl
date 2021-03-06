{include file="header.tpl" seccion="adminCancion"}
<div class="container">
  <div class="row">
    <div class="col-12">
      <hr/>
      <h1 class="tituloIndex">Cargar - Editar - Borrar canciones</h1>
      <hr/>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
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
      <td>{$cancion['nombre']}</td>
      <td><a href="borrarCancion/{$cancion['idCancion']}">Borrar</a></td>
      <td><a href="editarCancion/{$cancion['idCancion']}">Editar</a></td>
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
           <h2 class="tituloIndex">Cargar Cancion</h2>
          <hr/>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
      <form method="post" action="agregarCancion">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreCancionForm" name="nombreCancionForm">
        </div>
        <div class="form-group">
          <label for="duracionForm">Duracion</label>
          <input type="text" class="form-control" id="duracionForm" name="duracionForm">
        </div>
        <div class="form-group">
          <label for="idDiscoForm">Disco</label>
          <select class="form-control" id="idDiscoForm" name="idDiscoForm">
  {foreach from=$Discos item=disco}
      <option value="{$disco['id']}"> {$disco['nombre']}</option>
  {/foreach}
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Cargar Cancion</button>
      </form>
     </div>
    </div>
   </div>
{include file="footer.tpl"}
