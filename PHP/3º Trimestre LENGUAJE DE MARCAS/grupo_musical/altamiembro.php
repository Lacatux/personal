<?php
session_start();
  include "datos.php";
  var_dump($_POST['nombre'], $_POST['instrumento'], $_POST['fecha_nacimiento'], $_POST['ciudad']);
  $resultado = crearmiembro ( $_POST['nombre'], $_POST['instrumento'], $_POST['fecha_nacimiento'], $_POST['ciudad']);
  header("location: index.php");


 ?>
