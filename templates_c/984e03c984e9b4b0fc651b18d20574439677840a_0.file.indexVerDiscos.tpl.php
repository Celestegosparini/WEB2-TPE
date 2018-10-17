<?php
/* Smarty version 3.1.33, created on 2018-10-13 19:21:53
  from 'C:\xampp\htdocs\WEB2-TPE\templates\indexVerDiscos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc229b18f2116_21824005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '984e03c984e9b4b0fc651b18d20574439677840a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-TPE\\templates\\indexVerDiscos.tpl',
      1 => 1539451306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc229b18f2116_21824005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('seccion'=>"discos"), 0, false);
?>

<div class="tablaCancion">
  <h1 class="tituloIndex"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
   <table class="table table-dark">
    <thead>
   <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Precio</th>
   </tr>
   </thead>
 <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discos']->value, 'disco');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['disco']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['disco']->value['nombre'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['disco']->value['precio'];?>
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
