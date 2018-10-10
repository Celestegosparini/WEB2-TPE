<?php
require_once "./view/cancionView.php";
require_once "./model/cancionModel.php";
require_once "./model/discoModel.php";
require_once "secureController.php";

class cancionController extends secureController
{
  private $view;
  private $model;
  private $Titulo;
  private  $discoModel;


  function __construct()
  {
    parent::__construct();
  $this->view = new cancionView();
  $this->model = new cancionModel();
  $this->Titulo = "Canciones ";
  $this->discoModel = new discoModel();
  }

  function HomeCancion(){

    $Cancion = $this->model->getCancion();
    $Discos = $this->discoModel->GetDiscos();
    $this->view->mostrarCancion($this->Titulo, $Cancion, $Discos);
  }


  function InsertCancion(){
    $nombre = $_POST["nombreCancionForm"];
    $duracion = $_POST["duracionForm"];
    $disco = $_POST["discoForm"];
    $this->model->insertCancion($nombre,$duracion,$disco);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/homeCancion");
  }

  function BorrarCancion($param){
    $this->model->borrarCancion($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/homeCancion");
  }
}

 ?>
