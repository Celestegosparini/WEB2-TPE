{include file="header.tpl" seccion="adminCancion"}
    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="{$home}/guardarEditarCancion/{$cancion['idCancion']}">
        <input type="hidden" class="form-control" id="idFormEditarCancion" name="idFormEditarCancion" value="{$cancion['idCancion']}">
        <div class="form-group">
          <label for="nombreFormCancion">Nombre</label>
          <input type="text" class="form-control" id="nombreFormCancion" name="nombreFormCancion" value="{$cancion['nombreCancion']}">
        </div>
        <div class="form-group">
          <label for="duracion">Duracion</label>
          <input type="text" class="form-control" id="duracionForm" name="duracionForm" value="{$cancion['duracion']}">
        </div>
        <div class="form-group">
         <label for="idDiscoFormEditarCancion">Disco</label>
         <select class="form-control" id="idDiscoFormEditarCancion" name="idDiscoFormEditarCancion">
 {foreach from=$Discos item=disco}
     <option value="{$disco['id']}"> {$disco['nombre']}</option>
 {/foreach}

       </select>
    </div>

        <button type="submit" class="btn btn-primary">Editar Cancion</button>
      </form>
    </div>
{include file="footer.tpl"}
