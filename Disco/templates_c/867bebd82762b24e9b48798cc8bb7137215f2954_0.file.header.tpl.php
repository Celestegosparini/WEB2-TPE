<?php
/* Smarty version 3.1.33, created on 2018-10-09 19:41:41
  from 'C:\xampp\htdocs\Babasonicos\Disco\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbce855aa3d26_51595687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '867bebd82762b24e9b48798cc8bb7137215f2954' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Babasonicos\\Disco\\templates\\header.tpl',
      1 => 1539106895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbce855aa3d26_51595687 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/estilo.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</title>

  </head>
  <body>
    <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Longer nav link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="#">Cerra Sesion</a>
  </li>
</ul>

<div class="card-header" id="titulo">
Discos
</div>
<?php }
}
