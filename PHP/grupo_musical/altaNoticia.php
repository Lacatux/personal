<?php
session_start();
  include "datos.php";
  $resultado = crearNoticia ( $_POST['titulo'], $_POST['resumen'], $_POST['descripcion'], $_POST['imagen'],$_SESSION['id_user']);
  header("location: index.php");
 ?>
