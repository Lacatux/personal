<?php
  include "datos.php";
  $resultado = insertarUsuario($_POST["user"], $_POST["name"], $_POST["password"]);
  header("location: index.php");
 ?>
