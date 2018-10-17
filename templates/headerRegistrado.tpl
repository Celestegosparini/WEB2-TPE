<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/estilo.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>{$titulo}</title>

  </head>
  <body>
    <div class="barraPrincipal">
    <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link {if $seccion=="adminDisco"}active{/if}" href="{$home}/adminDisco">Cargar Discos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {if $seccion=="adminCancion"}active{/if}" href="{$home}/adminCanciones">Cargar Canciones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{$home}/logout">Salir</a>
  </li>
</div>

</ul>
