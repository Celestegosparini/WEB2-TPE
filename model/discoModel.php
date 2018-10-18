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

  function getDiscos(){
      $sentencia = $this->db->prepare( "select * from disco");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function getDiscoId($idDisco){
      $sentencia = $this->db->prepare( "select * from disco where id=?");
      $sentencia->execute(array($idDisco));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function guardarEditarDisco($nombre,$precio,$id){
  $sentencia = $this->db->prepare( "UPDATE disco set nombre=?, precio=? WHERE id=?");
  $sentencia->execute(array($nombre,$precio,$id));
  }


  function insertDisco($nombre,$precio){
    $sentencia = $this->db->prepare("INSERT INTO disco(nombre,precio) VALUES(?,?)");
    $sentencia->execute(array($nombre,$precio));
  }

  function borrarDiscoId($idDisco){
    $sentencia = $this->db->prepare( "delete from disco where id=?");
    $sentencia->execute(array($idDisco));
    print_r($sentencia);

  }

}

 ?>
