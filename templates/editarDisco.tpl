{include file="header.tpl" seccion="adminDisco"}
    <div class="container">
      <div class="row">
        <div class="col-12">
          <hr/>
            <h2 class="tituloIndex">Editar disco: {$disco['nombre']}</h2>
          <hr/>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
      <form method="post" action="{$home}/guardarEditarDisco/{$disco['id']}">
        <input type="hidden" class="form-control" id="idFormEditarDisco" name="idFormEditarDisco" value="{$disco['id']}">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreFormDisco" name="nombreFormDisco" value="{$disco['nombre']}">
        </div>
        <div class="form-group">
          <label for="precioForm">Precio</label>
          <input type="text" class="form-control" id="precioFormDisco" name="precioFormDisco" value="{$disco['precio']}">
        </div>
        <button type="submit" class="btn btn-primary">Editar Disco</button>
      </form>
     </div>
    </div>
  </div>
{include file="footer.tpl"}
