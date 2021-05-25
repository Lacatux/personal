<?php
  include "datos.php";
  $noticias = noticiasbyid($_GET['id_noticia']);
  var_dump($noticias);
  $idnoticia = $noticias['id_noticia'];
  var_dump($idnoticia);
  $resultado = borrarnoticiatag($idnoticia);
  $resultado = borrarnoticia($idnoticia);
  header("location: index.php");
 ?>
