
{include file="header.tpl" seccion="canciones"}
<div class="container">
  <div class="row">
    <div class="col-12">
      <hr/>
       <h1 class="tituloIndex">Detalle de la canción: {$cancion[0]['nombreCancion']}</h1>
      <hr/>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <ul class="list-group">
          {foreach from=$cancion item=$c}
     <li class="list-group-item">Nombre: {$c['nombreCancion']}</li>
     <li class="list-group-item">Duracion: {$c['duracion']}</li>
     <li class="list-group-item">Disco: {$c['nombre']}</li>
     <li class="list-group-item">Precio: ${$c['precio']} </li>
     {/foreach}
    </ul>
    </div>
  </div>
</div>
{include file="footer.tpl"}
