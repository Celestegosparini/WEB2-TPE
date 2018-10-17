<?php
require_once "./view/loginView.php";
require_once "./model/usuarioModel.php";


class loginController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct(){
  $this->view = new loginView();
  $this->model = new usuarioModel();
  $this->Titulo = "Login";
  }

  function login(){
      $this->view->mostrarLogin();
  }

  function logout(){
      session_start();
      session_destroy();
      header(LOGIN);
  }

  function verificarLogin(){
    $usuario = $_POST['usuarioId'];
    $pass = $_POST['passwordId'];
    $dbUser = $this->model->getUsuario($usuario);
    if(isset($dbUser) && !empty($dbUser)){
      if (password_verify($pass,$dbUser[0]['pass'])){
        session_start();
        $_SESSION["usuario"] = $usuario;
        header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/administrador");
      }else{
          $this->view->mostrarLogin("Contraseña invalida");
      }
    }else{
      $this->view->mostrarLogin("El usuario no existe");
    }
  }
}
?>
