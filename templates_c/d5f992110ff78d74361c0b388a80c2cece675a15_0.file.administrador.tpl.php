<?php
/* Smarty version 3.1.33, created on 2018-10-17 03:17:49
  from 'C:\xampp\htdocs\WEB2-TPE\templates\administrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc68dbd6a1390_17418274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f992110ff78d74361c0b388a80c2cece675a15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-TPE\\templates\\administrador.tpl',
      1 => 1539739065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerRegistrado.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc68dbd6a1390_17418274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerRegistrado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <table class="table table-dark" class="tablaDisco">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablaDiscos']->value, 'disco');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['disco']->value) {
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['disco']->value['nombre'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['disco']->value['precio'];?>
</td>
          <td><a href="borrarDisco/<?php echo $_smarty_tpl->tpl_vars['disco']->value['id'];?>
">Borrar</a></td>
          <td><a href="editarDisco/<?php echo $_smarty_tpl->tpl_vars['disco']->value['id'];?>
">Editar</a></td>
         </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  </tbody>
</table>
    <div class="container">
      <h2>Cargar Disco</h2>
      <form method="post" action="agregarDisco">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Precio</label>
          <input type="text" class="form-control" id="precioForm" name="precioForm">
        </div>
        <button type="submit" class="btn btn-primary">Cargar Disco</button>
      </form>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
