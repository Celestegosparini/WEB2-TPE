{include file="header.tpl" seccion="discos"}
  <div class="container">
    <div class="row">
      <div class="col-12">
        <hr/>
         <h1 class="tituloIndex">{$titulo}</h1>
        <hr/>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
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
      <td>${$disco['precio']}</td>
     </tr>
  {/foreach}
</tbody>
   </table>
    </div>
  </div>
</div>
{include file="footer.tpl"}
