<li class="nav-item">
  <a class="nav-link {if $seccion=="canciones"}active{/if}" href="{$home}/canciones">Canciones</a>
</li>
<li class="nav-item">
  <a class="nav-link {if $seccion=="discos"}active{/if}" href="{$home}/discos">Discos</a>
</li>
<li class="nav-item">
  <a class="nav-link {if $seccion=="cancionesPorDisco"}active{/if}" href="{$home}/cancionesPorDisco">Canciones por Disco</a>
</li>
{if !isset($smarty.session.usuario)}
<li class="nav-item">
  <a class="nav-link {if $seccion=="login"}active{/if}" href="{$home}/login">Ingresar</a>
</li>
{/if}
