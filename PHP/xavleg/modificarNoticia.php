<?php
  include "datos.php";

  $resultado = modificarNoticia($_POST['nombre'], $_POST['texto'], $_POST['resumen'], $_POST['imagen'], $_POST['id']);
  header("location: index.php");
 ?>
