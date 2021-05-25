<?php
  session_start();
  include "datos.php";
  $user = login($_POST['user'], $_POST['password']);
  if(sizeof($user) == 0)
  {
    header("location: login.php");
  } else
  {
    session_start();
    $_SESSION['user'] = $user['user'];
    header("location: index.php");
  }
 ?>