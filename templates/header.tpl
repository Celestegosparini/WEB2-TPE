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
    <ul class="nav nav-pills nav-fill">
      <li class="nav-item">
        <a class="nav-link {if $seccion=="canciones"}active{/if}" href="{$home}/canciones">Canciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {if $seccion=="discos"}active{/if}" href="{$home}/discos">Discos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {if $seccion=="cancionesPorDisco"}active{/if}" href="{$home}/cancionesPorDisco">Canciones por Disco</a>
      </li>
  <li class="nav-item">
    <a class="nav-link {if $seccion=="login"}active{/if}" href="{$home}/login">Ingresar</a>
  </li>
</div>

</ul>
