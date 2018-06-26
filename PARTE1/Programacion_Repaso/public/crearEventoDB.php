<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Evento;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Crear evento</title>
  </head>
  <body>
    <?php
    //Recojer parametros por post
    $nombre=$_POST["nombre"];
    //Ejemplo de uso de modelos
    $e = new Evento();
    $resultado=$e->insertarEventos($nombre);
    if ($resultado==TRUE) {
      echo "Se ha insertado correctamente";
    }
    echo "<br><a href="."index.php".">Ir al index de eventos.</a>";
    ?>
  </body>
</html>
