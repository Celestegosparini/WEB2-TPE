<?php
require_once "./view/indexView.php";
require_once "./model/cancionModel.php";
require_once "./model/discoModel.php";


class indexController
{
  private $view;
  private $cancionModel;
  private $discoModel;


  function __construct()
  {
  $this->view = new indexView();
  $this->cancionModel = new cancionModel();
  $this->discoModel = new discoModel();

  }

  function verCanciones(){
    $canciones = $this->cancionModel->getCanciones();
    $this->view->mostrarCanciones("Canciones", $canciones);
  }

  function verCancion($params){
    $id = $params[0];
    $cancion = $this->cancionModel->getCancionId($id);
    $this->view->mostrarCancion("Cancion", $cancion);
  }

  function verDiscos(){
    $discos = $this->discoModel->getDiscos();
    $this->view->mostrarDiscos("Discos", $discos);
  }

  function verCancionesPorDisco(){
    $discos = $this->discoModel->getDiscos();
    $canciones = $this->cancionModel->getCancionesPorDiscos();
    $this->view->mostrarCancionesPorDisco("Canciones por Disco", $canciones, $discos);
  }
}

 ?>
