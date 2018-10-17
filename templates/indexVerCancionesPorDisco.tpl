{include file="header.tpl" seccion="canciones"}

<div class="tablaCancion">
  <h1 class="tituloIndex">{$titulo}</h1>
   <table class="table table-dark">
    <thead>
   <tr>
    <th scope="col">Nombre</th>
   </tr>
   </thead>
 <tbody>
  {foreach from=$canciones item=cancion}
    <tr>
      <td>{$cancion['nombreCancion']}</td>
      <td><a href="./verCancion/{$cancion['idCancion']}">Ver más</a></td>
     </tr>
  {/foreach}

</tbody>
   </table>
</div>

{include file="footer.tpl"}
