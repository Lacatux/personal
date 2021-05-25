<?php
  include "datos.php";
  $date_lanzamiento = date("Y-m-d", strtotime($_POST['fecha']));
  //$_POST['fecha']
  $resultado = insertarDisco($_POST['nombre'], $date_lanzamiento, $_POST['num_canciones']);
  header("location: index.php");
 ?>
