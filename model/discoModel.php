<?php
/**
 *
 */
class DiscoModel
{
  private $db;

  function __construct()
  {
    $this->db  = new PDO('mysql:host=localhost;'
    .'dbname=discos;charset=utf8'
    , 'root', '');
  }

  function GetDiscos(){
      $sentencia = $this->db->prepare( "select * from disco");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertDisco($nombre,$precio){
    $sentencia = $this->db->prepare("INSERT INTO disco(nombre,precio) VALUES(?,?)");
    $sentencia->execute(array($nombre,$precio));
  }

  function BorrarDisco($idDisco){

    $sentencia = $this->db->prepare( "delete from disco where id=?");
    $sentencia->execute(array($idDisco));
  }

}

 ?>
