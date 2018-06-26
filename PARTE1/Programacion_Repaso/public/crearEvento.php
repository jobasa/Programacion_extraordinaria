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
    <h1><center>CREA TU EVENTO</center></h1>
    <form class="" action="crearEventoDB.php" method="post" onsubmit="return comprobar()">
      <center>
        <input type="text" name="nombre" value="" placeholder="" id="nombre">
        <input type="submit" name="Enviar" value="CREAR">
      </center>
    </form>
    <script type="text/javascript" src="js/validarInsercion.js"></script>
  </body>
</html>
