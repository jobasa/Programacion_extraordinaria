<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Evento;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina home del proyecto</title>
  </head>
  <body>
    <h1 align="center">LISTADO DE EVENTOS</h1>
   <table bgcolor="#00a5a5" width="70%" border="1px" align="center">

   <tr align="center">
     <th>Nombre del evento</th>
   </tr>
    <?php
    //Ejemplo de uso de modelos
    $e = new Evento();
    $resultado=$e->listarEventos();

    foreach ($resultado as $evento) {
      echo "<tr>".
      "<th>".$evento['nombre']."</th>".
      "<th><a href="."actualizarEvento.php?codigo=".$evento['id'].">Modificar</a></th>".
      "<th><a href="."borrarEvento.php?codigo=".$evento['id'].">Borrar</a></th>".
      "</tr>";
    }
    ?>
    </table>
    <form class="" action="crearEvento.php" method="post">
    <center>
    <input  type='submit' name='crearEvento' value='Crear evento'>
  </center>
  </form>
  <br>


  <?php
  require_once __DIR__.'/../vendor/autoload.php';
  use Daw\models\Equipo;
  ?>
  <h1 align="center">LISTADO DE EQUIPOS</h1>
 <table bgcolor="#00a5a5" width="70%" border="1px" align="center">

 <tr align="center">
   <th>Nombre del equipo</th>
   <th>Participantes</th>
 </tr>
  <?php
  //Ejemplo de uso de modelos
  $i = new Equipo();
  $resultado=$i->listarEquipo();

  foreach ($resultado as $evento) {
    echo "<tr>".
    "<th>".$evento['nombre']."</th>".
    "<th>".$evento['participantes']."</th>".
    "</tr>";
  }
  ?>
  </table>
  <form class="" action="insertarEquipo.php" method="post">
  <center>
  <input  type='submit' name='crearEquipo' value='Crear equipo'>
</center>
</form>
  </body>
</html>
