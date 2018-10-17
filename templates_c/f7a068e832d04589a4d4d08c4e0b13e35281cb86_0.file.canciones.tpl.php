<?php
/* Smarty version 3.1.33, created on 2018-10-13 16:24:48
  from 'C:\xampp\htdocs\WEB2-TPE\templates\canciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc2003060c528_62916739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7a068e832d04589a4d4d08c4e0b13e35281cb86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-TPE\\templates\\canciones.tpl',
      1 => 1539440055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc2003060c528_62916739 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="divPrincipal">
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="tablaCancion">
<table class="table table-dark" class="tablaCancion">
<thead>
<tr>
  <th scope="col">Nombre</th>
  <th scope="col">Duracion</th>
  <th scope="col">Disco</th>
</tr>
</thead>
<tbody>


  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Canciones']->value, 'cancion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cancion']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value['nombreCancion'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value['duracion'];?>
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
?>
</div>
<?php }
}
