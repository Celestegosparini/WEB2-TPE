<?php

 class cargarCancionView
 {

   private $Smarty;

    function __construct()
    {
    $this->Smarty = new Smarty();
    }
   function mostrarCancionLogin($Titulo,$Canciones,$Discos){
     $smarty = new Smarty();
     $smarty->assign('Titulo',$Titulo);
     $smarty->assign('Canciones',$Canciones);
     $smarty->assign('Discos',$Discos);
     $smarty->display('templates/cargarCancion.tpl');
   }
 }
 ?>
