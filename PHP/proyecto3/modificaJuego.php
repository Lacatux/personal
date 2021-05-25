<?php
  include "datos.php";
  $resultado = modificarJuego($_POST["id_juego"], $_POST["titulo"], $_POST["descripcion"], $_POST["imagen"], $_POST["precio"], $_POST["categoria"]);
  header("location: index2.php");
 ?>
