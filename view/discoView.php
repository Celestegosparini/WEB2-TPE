<?php
require('libs/Smarty.class.php');


/**
 *
 */
class discoView  {
  function Mostrar($Titulo,$Discos){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Discos',$Discos);
    $smarty->display('templates/home.tpl');
  
  }
}
?>
