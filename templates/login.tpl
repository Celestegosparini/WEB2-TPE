
  {include file="header.tpl" seccion="login"}
<div class="container">
  <div class="row">
    <div class="col-12">
      <hr/>
       <h2 class="tituloIndex">Ingresar</h2>
      <hr/>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
  <form method="post" action="verificarLogin" class="formLogin">
  <div class="form-group" >
    <label for="exampleInputEmail1">Usuario</label>
    <input type="input" class="form-control" name="usuarioId" id="usuarioId" aria-describedby="emailHelp" placeholder="Ingrese Usuario">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Contraseña">
  </div>
  <div class="">
    {$mensaje}
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
  </div>
 </div>
</div>

{include file="footer.tpl"}
