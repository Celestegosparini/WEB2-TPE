<?php
/* Smarty version 3.1.33, created on 2018-10-17 21:54:20
  from 'C:\xampp\htdocs\WEB2-TPE\templates\headerRegistrado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7936c998e70_51406082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87ce3a8ac181cbd4a9bada16a514f98f96080609' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2-TPE\\templates\\headerRegistrado.tpl',
      1 => 1539792060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc7936c998e70_51406082 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="barraPrincipal">
    <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['seccion']->value == "adminDisco") {?>active<?php }?>" href="./adminDisco">Cargar Discos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['seccion']->value == "adminCancion") {?>active<?php }?>" href="./adminCanciones">Cargar Canciones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="./logout">Salir</a>
  </li>
</div>

</ul>
<?php }
}
