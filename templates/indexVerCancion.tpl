
{include file="header.tpl" seccion="canciones"}


  <h1 class="tituloIndex">{$titulo}</h1>
   <table class="table table-dark">
    <thead>
   <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Duracion</th>
    <th scope="col">Disco</th>
    <th scope="col">Precio del Disco</th>
   </tr>
   </thead>
 <tbody>
  {foreach from=$cancion item=$c}
    <tr>
      <td>{$c['nombreCancion']}</td>
      <td>{$c['duracion']}</td>
      <td>{$c['nombre']}</td>
      <td>{$c['precio']}</td>
     </tr>
  {/foreach}

</tbody>
   </table>
{include file="footer.tpl"}
