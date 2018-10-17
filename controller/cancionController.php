<?php
require_once "./view/cancionView.php";
require_once "./model/cancionModel.php";
require_once "./model/discoModel.php";

class cancionController
{
  private $view;
  private $model;
  private $Titulo;
  private  $discoModel;


  function __construct()
  {

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

 function cancion($param){
    $idCancion = $param[0];
   $Cancion = $this->model->getCancionId($idCancion);
   $Discos = $this->discoModel->GetDiscos();
   $this->view->mostrarCancion($this->Titulo, $Cancion, $Discos);

 }
}


 ?>
