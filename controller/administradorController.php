<?php
require_once "./view/administradorView.php";
require_once "./model/cancionModel.php";
require_once "./model/discoModel.php";
require_once "/secureController.php";

class administradorController extends secureController
{
  private $view;
  private $cancionModel;
  private $discoModel;
  private $Titulo;


  function __construct()
  {
  parent::__construct();
  $this->view = new administradorView();
  $this->cancionModel = new cancionModel();
  $this->discoModel = new discoModel();
  }

  function getCanciones(){
    $canciones = $this->cancionModel->getCanciones();
    $discos = $this->discoModel->getDiscos();
    $this->view->mostrarCanciones("Canciones", $canciones,$discos);

}
function getDiscos(){
  $discos = $this->discoModel->getDiscos();
  $this->view->mostrarTablaDiscos("Discos", $discos);
}


  function insertCancion(){
    $nombre = $_POST["nombreCancionForm"];
    $duracion = $_POST["duracionForm"];
    $disco = $_POST["idDiscoForm"];
    $this->cancionModel->insertCancion($nombre,$duracion,$disco);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/adminCanciones");
  }

  function insertDisco(){

    $nombre = $_POST["nombreForm"];
    $precio = $_POST["precioForm"];
     $this->discoModel->insertDisco($nombre,$precio);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/adminDisco");
  }

  function borrarDisco($param){
    $this->discoModel->borrarDiscoId($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/adminDisco");
  }

  function borrarCancion($param){
    $this->cancionModel->borrarCancionId($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/adminCanciones");
  }

  function editarDisco($param){
      $idDisco = $param[0];
      $disco = $this->discoModel->getDiscoId($idDisco);
      $this->view->mostrarEditarDisco("Editar Discos", $disco);
  }
  function editarCancion($param){
      $idCancion = $param[0];
      $cancion = $this->cancionModel->getCancion($idCancion);
      $discos = $this->discoModel->getDiscos();
      $this->view->mostrarEditarCancion("Editar Canciones", $cancion, $discos);
  }

  function guardarEditarDisco(){
    $nombre = $_POST["nombreFormDisco"];
    $precio = $_POST["precioFormDisco"];
    $idDisco = $_POST["idFormEditarDisco"];
    $this->discoModel->guardarEditarDisco($nombre,$precio,$idDisco);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/adminDisco");
  }
  function guardarEditarCancion(){
    $nombre = $_POST["nombreFormCancion"];
    $duracion = $_POST["duracionForm"];
    $idCancion = $_POST["idFormEditarCancion"];
    $idDisco = $_POST["idDiscoFormEditarCancion"];
    $this->cancionModel->guardarEditarCancion($nombre,$duracion,$idCancion,$idDisco);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/adminCanciones");
  }

}


 ?>
