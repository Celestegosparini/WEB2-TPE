{include file="header.tpl" seccion="cancionesPorDisco"}

<div class="tablaCancion">
  <h1 class="tituloIndex">{$titulo}</h1>
   <table class="table table-dark">
    <thead>
   <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Disco</th>

   </tr>
   </thead>
 <tbody>
  {foreach from=$canciones item=cancion}
    <tr>
      <td>{$cancion['nombreCancion']}</td>
      <td>{$cancion['nombre']}</td>

     </tr>
  {/foreach}

</tbody>
   </table>
</div>

{include file="footer.tpl"}
