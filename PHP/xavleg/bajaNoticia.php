<?php
  include "datos.php";

  $resultado = borrarNoticia($_GET['id']);
  header("location: panelNoticia.php");
 ?>
