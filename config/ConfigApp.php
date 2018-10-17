<?php
define('HOME','Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('LOGIN','Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT','Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');


class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'indexController#verCanciones',
      'canciones'=> 'indexController#verCanciones',
      'discos'=> 'indexController#verDiscos',
      'cancion'=> 'indexController#verCancion',
      'cancionesPorDisco'=> 'indexController#verCancionesPorDisco',
      'verCancion'=> 'indexController#verCancion',
      'login'=> 'loginController#login',
      'verificarLogin'=> 'loginController#verificarLogin',
      'logout'=> 'loginController#logout',
      'adminDisco'=> 'administradorController#getDiscos',
      'adminCanciones'=> 'administradorController#getCanciones',
      'agregarCancion'=> 'administradorController#insertCancion',
      'agregarDisco'=> 'administradorController#insertDisco',
      'borrarCancion'=> 'administradorController#borrarCancion',
      'borrarDisco'=> 'administradorController#borrarDisco',
      'editarCancion'=> 'administradorController#editarCancion',
      'editarDisco'=> 'administradorController#editarDisco',
      'guardarEditarDisco'=> 'administradorController#guardarEditarDisco',
      'guardarEditarCancion'=> 'administradorController#guardarEditarCancion',

      /*
      'home'=> 'discoController#Home',
      'canciones'=> 'cancionController#HomeCancion',
      'ver'=> 'cancionController#cancion',
      'agregar'=> 'discoController#InsertDisco',
      'cargarCancion'=> 'cancionLoginController#HomeCancion',
      'agregarCancion'=> 'cancionLoginController#InsertCancion',
      'borrarCancion'=> 'cancionController#BorrarCancion',
      'login'=> 'loginController#login',
      'logout'=> 'loginController#logout',
      */
    ];

}

 ?>
