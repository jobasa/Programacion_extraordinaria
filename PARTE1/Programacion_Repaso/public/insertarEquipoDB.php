<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Equipo;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Crear Equipo</title>
  </head>
  <body>
    <?php
    //Recojer parametros por post
    $nombre=$_POST["nombre"];
    $participantes=$_POST["participantes"];
    //Ejemplo de uso de modelos
    $i = new Equipo();
    $resultado=$i->insertarEquipos($nombre, $participantes);
    if ($resultado==TRUE) {
      echo "Se ha insertado correctamente";
    }
    echo "<br><a href="."index.php".">Ir al index de eventos y equipos.</a>";
    ?>
  </body>
</html>
