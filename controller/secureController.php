<?php
/**
 *
 */
class secureController {

  function __construct(){
    if(isset($_SESSION["usuario"])){
      if ( isset($_SESSION['LAST_ACTIVITY']) &&  (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
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
