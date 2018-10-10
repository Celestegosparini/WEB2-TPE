<?php
/**
 *
 */
class UsuarioModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=discos;charset=utf8'
    , 'root', '');
  }

  function getUsuario($usuario){

      $sentencia = $this->db->prepare( "select * from usuario where nombre=?");
      $sentencia->execute(array($usuario));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function insertarUsuario($nombre,$pass){

    $sentencia = $this->db->prepare("INSERT INTO usuario(nombre, pass) VALUES(?,?)");
    $sentencia->execute(array($nombre, $pass));
  }

}


 ?>
