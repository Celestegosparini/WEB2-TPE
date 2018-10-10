<?php

 class cancionView
 {

   private $Smarty;

    function __construct()
    {
    $this->Smarty = new Smarty();
    }
   function mostrarCancion($Titulo,$Canciones,$Discos){
     $smarty = new Smarty();
     $smarty->assign('Titulo',$Titulo);
     $smarty->assign('Canciones',$Canciones);
     $smarty->assign('Discos',$Discos);
     $smarty->display('templates/homeCancion.tpl');
   }
 }
 ?>
