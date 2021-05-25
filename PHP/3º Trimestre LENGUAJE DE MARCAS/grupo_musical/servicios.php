<?php

if(isset($_SERVER['HTTP_ORIGIN']))
{
  header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
  header("Access-Control-Allow-Credentials: true");
  header("Access-Control-Max-Age: 86400");
}

if($_SERVER['REQUEST_METHOD'] == 'OPTIONS')
{
  if(isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
    header("Access-Control-Allow-Methods: GET, POST, DELETE, PUT, OPTIONS");
  if(isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
    header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
  exit(0);
}

header('Content-Type: application/JSON');

$function = $_POST['function'];
include 'datos.php';

if($function == 'noticiasbyid_tag')
{
  $noticias = noticiasbyid_tag($_POST['id_tag']);
  $noticiasJson = json_encode($noticias, JSON_UNESCAPED_UNICODE);
  echo $noticiasJson;
} else if($function == 'noticiasbyid')
{
  $noticia = noticiasbyid($_POST['id_noticia']);
  $noticiaJson = json_encode($noticia, JSON_UNESCAPED_UNICODE);
  echo $noticiaJson;
} else if($function == 'noticiasytags')
{
  $noticiatag = noticiasytags($_POST['id_tag'], $_POST['fecha']);
  $noticiatagJson = json_encode($noticiatag, JSON_UNESCAPED_UNICODE);
  echo $noticiatagJson;
}else if($function == 'comprobarUsuario')
{
  $usuario = comprobarUsuario($_POST['user']);
  $usuarioJson = json_encode($usuario, JSON_UNESCAPED_UNICODE);
  echo $usuarioJson;
}

?>
