
{include file="header.tpl" seccion="canciones"}

<div class="tablaCancion">

  <h1 class="tituloIndex">{$titulo}</h1>
   <table class="table table-dark">
    <thead>
   <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Duracion</th>
    <th scope="col">Disco</th>
   </tr>
   </thead>
 <tbody>
  {foreach from=$cancion item=c}
    <tr>
      <td>{$c['nombreCancion']}</td>
      <td>{$c['duracion']}</td>
      <td>{$c['idDisco']}</td>
     </tr>
  {/foreach}

</tbody>
   </table>
</div>
{include file="footer.tpl"}
