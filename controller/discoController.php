<?php

require_once "./view/discoView.php";
require_once "./model/discoModel.php";
require_once "secureController.php";

class discoController extends secureController
{
  private $view;
  private $model;
  private $Titulo;


  function __construct()
  {
    parent::__construct();
  $this->view = new discoView();
  $this->model = new discoModel();
  $this->Titulo = "Discografia ";
  }

  function Home(){

    $Discos = $this->model->GetDiscos();
    $this->view->Mostrar($this->Titulo, $Discos);
  }


  function InsertDisco(){

    $nombre = $_POST["nombreForm"];
    $precio = $_POST["precioForm"];
     $this->model->InsertDisco($nombre,$precio);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function BorrarDisco($param){
    $this->model->BorrarDisco($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
}

 ?>
