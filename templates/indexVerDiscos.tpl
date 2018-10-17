{include file="header.tpl" seccion="discos"}

<div class="tablaCancion">
  <h1 class="tituloIndex">{$titulo}</h1>
   <table class="table table-dark">
    <thead>
   <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Precio</th>
   </tr>
   </thead>
 <tbody>
  {foreach from=$discos item=disco}
    <tr>
      <td>{$disco['nombre']}</td>
      <td>{$disco['precio']}</td>
     </tr>
  {/foreach}

</tbody>
   </table>
</div>

{include file="footer.tpl"}
