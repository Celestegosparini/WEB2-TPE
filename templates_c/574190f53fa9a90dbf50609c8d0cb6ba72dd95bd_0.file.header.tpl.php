<?php
/* Smarty version 3.1.33, created on 2018-10-17 15:58:04
  from 'C:\xampp\htdocs\WEB2-TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc73fecd0f964_67997433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '574190f53fa9a90dbf50609c8d0cb6ba72dd95bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-TPE\\templates\\header.tpl',
      1 => 1539784587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc73fecd0f964_67997433 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/estilo.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>

  </head>
  <body>
    <ul class="nav nav-pills nav-fill">
      <li class="nav-item">
        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['seccion']->value == "canciones") {?>active<?php }?>" href="./canciones">Canciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['seccion']->value == "discos") {?>active<?php }?>" href="./discos">Discos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['seccion']->value == "cancionesPorDisco") {?>active<?php }?>" href="./cancionesPorDisco">Canciones por Disco</a>
      </li>
  <li class="nav-item">
    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['seccion']->value == "login") {?>active<?php }?>" href="./login">Ingresar</a>
  </li>
</div>

</ul>
<?php }
}
