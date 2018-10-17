<?php

 class administradorView
 {

   private $Smarty;

    function __construct()
    {
    $this->Smarty = new Smarty();
    }
   function mostrarCanciones($titulo,$canciones,$Discos){
     $smarty = new Smarty();
     $smarty->assign('titulo',$titulo);
     $smarty->assign('canciones',$canciones);
      $smarty->assign('Discos',$Discos);
     $smarty->display('templates/adminCanciones.tpl');
   }

   function mostrarTablaDiscos($titulo,$tablaDiscos){
     $smarty = new Smarty();
      $smarty->assign('titulo',$titulo);
     $smarty->assign('tablaDiscos',$tablaDiscos);
     $smarty->display('templates/adminDisco.tpl');
   }
   function mostrarEditarDisco($titulo,$disco){
      $this->Smarty->assign('titulo',$titulo);
      $this->Smarty->assign('disco',$disco);
      $this->Smarty->assign('./editarDisco',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $this->Smarty->display('templates/editarDisco.tpl');
    }
    function mostrarEditarCancion($titulo, $cancion){

       $this->Smarty->assign('titulo',$titulo);
       $this->Smarty->assign('cancion',$cancion);
       $this->Smarty->assign('editarCancion',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

       //$smarty->debugging = true;
       $this->Smarty->display('templates/editarCancion.tpl');
     }
 }
 ?>
