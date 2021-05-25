<?php
  include "datos.php";

  $resultado = insertarJuego($_POST['titulo'], $_POST['descripcion'], $_POST['imagen'], $_POST['precio'], $_POST['categoria']);
  header("location: index2.php");
 ?>
