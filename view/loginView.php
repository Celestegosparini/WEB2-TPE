<?php

 class loginView
 {

   private $Smarty;

    function __construct()
    {
    $this->Smarty = new Smarty();
    }
   function mostrarLogin($mensaje =''){
     $smarty = new Smarty();
     $smarty->assign('Titulo','Login');
     $smarty->assign('mensaje',$mensaje);
     $smarty->display('templates/login.tpl');
   }
 }
 ?>
