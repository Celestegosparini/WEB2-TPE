<?php
/* Smarty version 3.1.33, created on 2018-10-09 18:12:00
  from 'C:\xampp\htdocs\Babasonicos\Disco\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbcd350d7e8b7_77380875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d77d40603dd285c17d763d3b3d45478ba161ade' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Babasonicos\\Disco\\templates\\home.tpl',
      1 => 1539101489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bbcd350d7e8b7_77380875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <table class="table table-dark" id="tablaDisco">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>


      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Discos']->value, 'disco');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['disco']->value) {
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['disco']->value['nombre'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['disco']->value['precio'];?>
</td>
          <td><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['disco']->value['id'];?>
">BORRAR</a></td>
         </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



  </tbody>
</table>


    <div class="container">
      <h2>Cargar Disco</h2>
      <form method="post" action="agregar">
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
