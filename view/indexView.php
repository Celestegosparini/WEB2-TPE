<?php
require_once ('libs/Smarty.class.php');

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
      $smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $smarty->display('templates/indexVerCanciones.tpl');
    }

    function mostrarCancion($titulo,$cancion){
      $smarty = new Smarty();
      $smarty->assign('titulo',$titulo);
      $smarty->assign('cancion',$cancion);
      $smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $smarty->display('templates/indexVerCancion.tpl');
    }

    function mostrarDiscos($titulo,$discos){
      $smarty = new Smarty();
      $smarty->assign('discos',$discos);
      $smarty->assign('titulo',$titulo);
      $smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $smarty->display('templates/indexVerDiscos.tpl');
    }

    function mostrarCancionesPorDisco($titulo,$canciones,$discos){
      $smarty = new Smarty();
      $smarty->assign('discos',$discos);
      $smarty->assign('canciones',$canciones);
      $smarty->assign('titulo',$titulo);
      $smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $smarty->display('templates/indexVerCancionesPorDisco.tpl');
    }
 }
 ?>
