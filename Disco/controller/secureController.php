<?php
/**
 *
 */
class secureController
{

  function __construct()
  {
    session_start();
   if(isset(  $_SESSION["usuario"])){
     if ( isset($_SESSION['LAST_ACTIVITY']) &&  (time() - $_SESSION['LAST_ACTIVITY'] > 2)) {
         $this->logout();
   }
    $_SESSION['LAST_ACTIVITY'] = time();
  }else{
    header(LOGIN);
  }
}
    function logout(){
     session_start();
     session_destroy();
     header(LOGIN);
}

}

 ?>
