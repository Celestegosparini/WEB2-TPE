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
     $smarty->assign('titulo','Login');
     $smarty->assign('mensaje',$mensaje);
     $smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
     $smarty->display('templates/login.tpl');
   }
 }
 ?>
