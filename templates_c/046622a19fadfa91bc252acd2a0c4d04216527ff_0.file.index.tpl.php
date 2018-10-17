<?php
/* Smarty version 3.1.33, created on 2018-10-13 15:25:57
  from 'C:\xampp\htdocs\WEB2-TPE\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc1f2655825a6_21205232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '046622a19fadfa91bc252acd2a0c4d04216527ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-TPE\\templates\\index.tpl',
      1 => 1539437139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc1f2655825a6_21205232 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="divPrincipal">

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="tituloIndex"><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
<div class="tablaCancion">
   <table class="table table-dark">
    <thead>
   <tr>
    <th scope="col">Nombre</th>
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
      <td><a href="ver">Ver más</a></td>
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
