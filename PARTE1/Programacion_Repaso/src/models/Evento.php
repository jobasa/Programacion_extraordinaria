<?php
namespace Daw\models;
/**
 * Plantilla vacia de Db
 */
class Evento extends Db
{

  function __construct()
  {
    parent::__construct();
  }
//funcion que muestra datos de tabla registro
function listarEventos(){
  $consulta="SELECT * FROM registro";
  $listadoEventos=parent::realizarConsultas($consulta);
  return $listadoEventos;
}
//funcion que inserta eventos
function insertarEventos($nombre){
 $consulta="INSERT INTO registro (nombre) VALUES ('$nombre');";
 $listadoEventos=parent::realizarConsultas($consulta);
 return $listadoEventos;

}
//funcion que actualiza EVENTOS
function actualizarEventos($nombre, $id) {
  $consulta="UPDATE registro SET nombre='$nombre' WHERE id='$id'";
  $listadoEventos=parent::realizarConsultas($consulta);
  return $listadoEventos;
}
//funcion borrar EVENTOS
function borrarEventos($eventoBorrado){
  $consulta="DELETE FROM registro
            WHERE id='$eventoBorrado'";
  $listadoEventos=parent::realizarConsultas($consulta);
  return $listadoEventos;

}

}

?>
