<?php
  $user = $_POST["user"];
  $password = $_POST["password"];
  $nombre = $_POST["name"];

  include "datos.php";
  $resultado = insertarUsuario($user, $password, $nombre);
  header("location: index2.php");
 ?>
