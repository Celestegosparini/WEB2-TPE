{include file="header.tpl" seccion="canciones"}

  <h1 class="tituloIndex">{$titulo}</h1>
   <table class="table table-dark">
    <thead>
   <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Disco</th>
    <th scope="col">Detalle</th>
   </tr>
   </thead>
 <tbody>
  {foreach from=$canciones item=cancion}
    <tr>
      <td>{$cancion['nombreCancion']}</td>
      <td>{$cancion['nombre']}</td>
      <td><a href="./verCancion/{$cancion['idCancion']}">Ver más</a></td>
     </tr>
  {/foreach}

</tbody>
   </table>


{include file="footer.tpl"}
