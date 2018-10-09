<?php
/* Smarty version 3.1.33, created on 2018-10-09 19:46:37
  from 'C:\xampp\htdocs\Babasonicos\Disco\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbce97d9efda2_71331398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '963318c661b6aae41cf1354d59fe3628d43ce228' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Babasonicos\\Disco\\templates\\login.tpl',
      1 => 1539107151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bbce97d9efda2_71331398 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
