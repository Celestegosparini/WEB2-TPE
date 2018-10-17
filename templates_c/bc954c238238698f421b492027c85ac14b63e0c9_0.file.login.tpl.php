<?php
/* Smarty version 3.1.33, created on 2018-10-17 15:58:04
  from 'C:\xampp\htdocs\WEB2-TPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc73feccc1756_29108975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc954c238238698f421b492027c85ac14b63e0c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-TPE\\templates\\login.tpl',
      1 => 1539784680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc73feccc1756_29108975 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('seccion'=>"login"), 0, false);
?>

  <h1 class="tituologin"><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>

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
    <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
