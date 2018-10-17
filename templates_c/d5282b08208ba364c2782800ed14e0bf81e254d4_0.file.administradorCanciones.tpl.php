<?php
/* Smarty version 3.1.33, created on 2018-10-16 14:32:54
  from 'C:\xampp\htdocs\WEB2-TPE\templates\administradorCanciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc5da7697bd74_74953273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5282b08208ba364c2782800ed14e0bf81e254d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-TPE\\templates\\administradorCanciones.tpl',
      1 => 1539632203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerRegistrado.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc5da7697bd74_74953273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerRegistrado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="tablaCancion">
<table class="table table-dark" class="tablaCancion">
<thead>
<tr>
  <th scope="col">Nombre</th>
  <th scope="col">Duracion</th>
  <th scope="col">Disco</th>
  <th scope="col">Eliminar</th>
  <th scope="col">Editar</th>
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
      <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value['duracion'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value['idDisco'];?>
</td>
      <td><a href="./borrarCancion/<?php echo $_smarty_tpl->tpl_vars['cancion']->value['id'];?>
">BORRAR</a></td>
      <td><a href="./editarCancion/<?php echo $_smarty_tpl->tpl_vars['cancion']->value['id'];?>
">BORRAR</a></td>
     </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</tbody>
</table>
</div>

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
          <label for="descripcionForm">Disco</label>
          <select class="form-control" id="idDiscoForm" name="idDiscoForm">
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
