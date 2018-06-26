<?php
namespace Daw\models;
/**
 * Plantilla vacia de Db
 */
class Db
{
  private $host="localhost";
  private $usuario="root";
  private $pass="";
  private $db="juegos";
  private $conector;

  function __construct()
  {
    $this->conector = new \mysqli ($this->host, $this->usuario, $this->pass, $this->db);
  }

function getconector(){
  return $this->conector;
}

function realizarConsultas($consulta){
  return $this->conector->query($consulta);
}

}

?>
