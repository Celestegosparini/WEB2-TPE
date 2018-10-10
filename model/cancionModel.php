<?php
/**
 *
 */
class cancionModel
{
  private $db;

  function __construct()
  {
    $this->db  = new PDO('mysql:host=localhost;'
    .'dbname=discos;charset=utf8'
    , 'root', '');
  }

  function getCancion(){
      $sentencia = $this->db->prepare( "select * from cancion");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function insertCancion($nombre,$duracion,$idDisco){
    $sentencia = $this->db->prepare("INSERT INTO cancion(nombreCancion,duracion,idDisco) VALUES(?,?,?)");
    echo $sentencia->execute(array($nombre,$duracion,$idDisco));
  }

  function borrarCancion($idCancion){

    $sentencia = $this->db->prepare( "delete from cancion where id=?");
    $sentencia->execute(array($idCancion));
  }

}

 ?>
