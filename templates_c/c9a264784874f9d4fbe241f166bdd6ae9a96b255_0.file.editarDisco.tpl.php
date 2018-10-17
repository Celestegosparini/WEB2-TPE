<?php
/* Smarty version 3.1.33, created on 2018-10-16 18:07:42
  from 'C:\xampp\htdocs\WEB2-TPE\templates\editarDisco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc60ccef2b715_43532002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a264784874f9d4fbe241f166bdd6ae9a96b255' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-TPE\\templates\\editarDisco.tpl',
      1 => 1539705980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerRegistrado.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc60ccef2b715_43532002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerRegistrado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="./guardarEditarDisco">
        <input type="hidden" class="form-control" id="idFormEditarDisco" name="idFormEditarDisco" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value['id'];?>
">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreFormDisco" name="nombreFormDisco" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value['nombre'];?>
">
        </div>
        <div class="form-group">
          <label for="precioForm">Precio</label>
          <input type="text" class="form-control" id="precioFormDisco" name="precioFormDisco" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value['precio'];?>
">
        </div>

        <button type="submit" class="btn btn-primary">Editar Disco</button>
      </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
