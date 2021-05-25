<?php
  $user = $_POST["user"];
  $password = $_POST["password"];
  $email = $_POST["email"];


  include "datos.php";
  $resultado = insertarUsuario($user, $password, $email);
  header("location: index.php");
 ?>
