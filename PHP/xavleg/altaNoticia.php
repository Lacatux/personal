<?php
  include "datos.php";

  $resultado = insertarNoticia($_POST['nombre'], $_POST['texto'], $_POST['resumen'], $_POST['imagen']);
  header("location: index.php");
 ?>
