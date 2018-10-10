<?php
/* Smarty version 3.1.33, created on 2018-10-10 22:35:39
  from 'C:\xampp\htdocs\Babasonicos\Disco\templates\homeCancion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbe629bc47e37_97910845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9e74104916e7c4596d9011f7f1e4cc5e1f273db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Babasonicos\\Disco\\templates\\homeCancion.tpl',
      1 => 1539203735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bbe629bc47e37_97910845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table table-dark" id="tablaCancion">
<thead>
<tr>
  <th scope="col">Nombre</th>
  <th scope="col">Duracion</th>
  <th scope="col">Eliminar</th>
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
      <td><a href="borrarCancion/<?php echo $_smarty_tpl->tpl_vars['cancion']->value['idCancion'];?>
">BORRAR</a></td>
     </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</tbody>
</table>


<div class="container">
  <h2>Cargar Cancion</h2>
  <form method="post" action="agregarCancion">
    <div class="form-group">
      <label for="nombreForm">Nombre</label>
      <input type="text" class="form-control" id="nombreCancionForm" name="nombreCancionForm">
    </div>
    <div class="form-group">
      <label for="descripcionForm">Duracion</label>
      <input type="text" class="form-control" id="duracionForm" name="duracionForm">
    </div>

    <div class="form-group">
      <label for="discoForm">Disco</label>
<select class="form-control" id="discoForm" name="discoForm">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Discos']->value, 'disco');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['disco']->value) {
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['disco']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['disco']->value['nombre'];?>
</option>
      

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</select>
    </div>
    <button type="submit" class="btn btn-primary">Cargar Cancion</button>
  </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
