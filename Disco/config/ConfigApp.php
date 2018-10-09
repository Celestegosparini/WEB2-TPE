<?php
define('HOME','Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('LOGIN','Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT','Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');


class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'discoController#Home',
      'home'=> 'discoController#Home',
      'agregar'=> 'discoController#InsertDisco',
      'borrar'=> 'discoController#BorrarDisco',
      'login'=> 'loginController#login',
      'logout'=> 'loginController#logout',
      'verificarLogin'=> 'loginController#verificarLogin'
    ];

}

 ?>
