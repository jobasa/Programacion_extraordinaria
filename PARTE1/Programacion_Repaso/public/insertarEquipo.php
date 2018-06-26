<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Equipo;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><center>CREA TU EQUIPO</center></h1>
    <form class="" action="insertarEquipoDB.php" method="post" onsubmit="return comprobarEquipos()">
      <center>
        <p>Nombre</p>
        <input type="text" name="nombre" value="" placeholder="" id="nombre">
        <p>Participantes</p>
        <input type="text" name="participantes" value="" placeholder="" id="participantes">
        <input type="submit" name="Enviar" value="CREAR">
      </center>
    </form>
    <script type="text/javascript" src="js/validarInsercionEquipos.js"></script>
  </body>
</html>
