{include file="header.tpl" seccion="cancionesPorDisco"}


  <h1 class="tituloIndex">{$titulo}</h1>
   <table class="table table-dark">
    <thead>
   <tr>
    <th scope="col">Nombre</th>
      <th scope="col">Duracion</th>
      <th scope="col">Disco</th>
      <th scope="col">Precio</th>

   </tr>
   </thead>
 <tbody>
  {foreach from=$canciones item=cancion}
    <tr>
      <td>{$cancion['nombreCancion']}</td>
      <td>{$cancion['duracion']}</td>
      <td>{$cancion['nombre']}</td>
      <td>{$cancion['precio']}</td>


     </tr>
  {/foreach}

</tbody>
</table>


{include file="footer.tpl"}
