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

  function getCanciones(){
      $sentencia = $this->db->prepare( "SELECT * FROM cancion, disco WHERE cancion.idDisco = disco.id");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function getCancion($idCancion){
      $sentencia = $this->db->prepare( "select * from cancion where idCancion=?");
      $sentencia->execute(array($idCancion));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function getCancionesPorDiscos(){
      $sentencia = $this->db->prepare( "SELECT * from cancion, disco WHERE cancion.idDisco = disco.id ORDER BY idDisco ASC");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getCancionId($idCancion){
      $sentencia = $this->db->prepare( "SELECT * FROM cancion, disco WHERE idCancion=? AND cancion.idDisco = disco.id");
      $sentencia->execute(array($idCancion));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function insertCancion($nombre,$duracion,$idDisco){
    $sentencia = $this->db->prepare("INSERT INTO cancion(nombreCancion,duracion,idDisco) VALUES(?,?,?)");
    echo $sentencia->execute(array($nombre,$duracion,$idDisco));
  }

  function borrarCancionId($idCancion){

    $sentencia = $this->db->prepare( "delete from cancion where idCancion=?");
    $sentencia->execute(array($idCancion));
  }

  function guardarEditarCancion($nombreCancion,$duracion,$idCancion, $idDisco){
  $sentencia = $this->db->prepare( "UPDATE cancion set nombreCancion=?, duracion=?, idDisco=? WHERE idCancion=?");
  $sentencia->execute(array($nombreCancion,$duracion,$idDisco,$idCancion));
  }

}

 ?>
