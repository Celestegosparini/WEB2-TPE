
{include file="header.tpl"}
<div class="tablaCancion">
  <h1 class="tituloIndex">{$titulo}</h1>
   <table class="table table-dark">
    <thead>
   <tr>
    <th scope="col">Nombre</th>
   </tr>
   </thead>
 <tbody>
  {foreach from=$Cancion item=cancion}
    <tr>
      <td>{$cancion['nombreCancion']}</td>
      <td>{$cancion['duracion']}</td>
      <td>{$cancion['idDisco']}</td>

     </tr>
  {/foreach}

</tbody>
   </table>
</div>
{include file="footer.tpl"}
