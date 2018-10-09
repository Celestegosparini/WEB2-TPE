<?php
require_once  "./view/UsuarioView.php";
require_once  "./model/UsuarioModel.php";

class UsuarioController extends secureController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new usuarioView();
    $this->model = new usuarioModel();
    $this->Titulo = "Lista de Usuario";
  }

  function mostrarUsuario(){
      $Usuarios = $this->model->getUsuario();
      $this->view->Mostrar($this->Titulo, $Usuarios);
  }



  function insertUsuario(){
    $nombre = $_POST["nombre"];
    $pass = $_POST["pass"];


    $this->model->insertarUsuario($nombre,$pass);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

}

 ?>
