<?php
/* Smarty version 3.1.33, created on 2018-10-17 15:55:44
  from 'C:\xampp\htdocs\WEB2-TPE\templates\indexVerCancionesPorDisco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc73f60ebd450_57094732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5ec913848a4e49e241cdea1c22f5838e0e4e566' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-TPE\\templates\\indexVerCancionesPorDisco.tpl',
      1 => 1539784540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc73f60ebd450_57094732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('seccion'=>"cancionesPorDisco"), 0, false);
?>

<div class="tablaCancion">
  <h1 class="tituloIndex"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
   <table class="table table-dark">
    <thead>
   <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Disco</th>

   </tr>
   </thead>
 <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['canciones']->value, 'cancion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cancion']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value['nombreCancion'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value['idDisco'];?>
</td>

     </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</tbody>
   </table>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
