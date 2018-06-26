<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar Usuarios</title>
  </head>
  <body>
    <h1>USUARIO ELIMINADO CORRECTAMENTE</h1>
    <a href="index.php" style="color:#000000">Ir al index de usuarios.</a>
    <?php
    require_once __DIR__.'/../vendor/autoload.php';
    use Daw\models\Evento;

    //Recojer con GET la variable "codigo" de index.php
    $eventoBorrado=$_GET["codigo"];

    //creo la conexion con la base de datos
    $resultado= new Evento();
    $resultado->borrarEventos($eventoBorrado)
     ?>

  </body>
</html>
