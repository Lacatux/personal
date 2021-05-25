<?php
  session_start();
  include "datos.php";
  $user = login($_POST['user'], $_POST['password']);

  if(sizeof($user) == 0)
  {
    header("location: login.php");
  } else
  {
    $_SESSION['user'] = $user['usuario'];
    header("location: index2.php");
  }
 ?>
