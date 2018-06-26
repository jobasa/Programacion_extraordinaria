<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Evento;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><center>ACTUALIZA TU EVENTO</center></h1>

    <form class="" action="actualizarEventoDB.php" method="post">
      <center>
        <?php
          $eventoActualizado=$_GET["codigo"];
          echo"<input type="."hidden"." name="."id"." value=".$eventoActualizado.">"
        ?>
        <input type="text" name="nombre">
        <input type="submit" name="Enviar" value="ACTUALIZAR">
      </center>
    </form>
  </body>
</html>
