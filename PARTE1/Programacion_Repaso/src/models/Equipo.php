<?php
namespace Daw\models;
/**
 * Plantilla vacia de Db
 */
class Equipo extends Db
{

  function __construct()
  {
    parent::__construct();
  }
//funcion que muestra datos de tabla equipo
function listarEquipo(){
  $consulta="SELECT * FROM equipo ORDER BY id DESC LIMIT 1";
  $listadoEventos=parent::realizarConsultas($consulta);
  return $listadoEventos;
}
//funcion que inserta eventos
function insertarEquipos($nombre, $participantes){
 $consulta="INSERT INTO equipo (nombre, participantes) VALUES ('$nombre', $participantes);";
 $listadoEventos=parent::realizarConsultas($consulta);
 return $listadoEventos;

}


}

?>
