<?php

 class indexView
 {

   private $Smarty;

    function __construct()
    {
    $this->Smarty = new Smarty();
    }

    function mostrarCanciones($titulo,$canciones){
      $smarty = new Smarty();
      $smarty->assign('titulo',$titulo);
      $smarty->assign('canciones',$canciones);
      $smarty->display('templates/indexVerCanciones.tpl');
    }

    function mostrarCancion($titulo,$Cancion){
      $smarty = new Smarty();
      $smarty->assign('titulo',$titulo);
      $smarty->assign('Cancion',$Cancion);
      $smarty->display('templates/indexVerCancion.tpl');
    }

    function mostrarDiscos($titulo,$discos){
      $smarty = new Smarty();
      $smarty->assign('discos',$discos);
      $smarty->assign('titulo',$titulo);
      $smarty->display('templates/indexVerDiscos.tpl');
    }

    function mostrarCancionesPorDisco($titulo,$canciones,$discos){
      $smarty = new Smarty();
      $smarty->assign('discos',$discos);
      $smarty->assign('canciones',$canciones);
      $smarty->assign('titulo',$titulo);
      $smarty->display('templates/indexVerCancionesPorDisco.tpl');
    }
 }
 ?>
