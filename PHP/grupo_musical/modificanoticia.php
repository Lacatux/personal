<?php
  include "datos.php";
  $resultado = modificarnoticia($_POST['id_noticia'], $_POST['titulo'], $_POST['resumen'], $_POST['descripcion'], $_POST['imagen']);
  header("location: index.php");
 ?>
