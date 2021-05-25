<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <title>XAVLEG</title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/comun.css">
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
  <?php
  session_start();
  include("datos.php");
  ?>
</head>

<body>

  <div id="encabezado">

    <h1 id="tituloWeb">XAVLEG</h1>
    <a href="index.php"><img id="logo" src="images/logo.png" alt="Logo de la banda" /></a>

    <div class="navbar">
      <a href="index.php">Inicio</a>
      <div class="dropdown">
        <button class="dropbtn">Gira
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="">Gira Completa</a>
          <a href="">Galería</a>
          <a href="">Compra de entradas</a>
        </div>
      </div>
      <a href="">Miembros</a>
      <a href="">Discografía</a>
      <div class = "navbar-right">
        <?php
        if (isset($_SESSION["user"]) == false) {
          echo "<a href='registro.php'>Registro</a>";
          echo "<a href='login.php'>Login</a>";
        } else {
          echo "<a  href='panelNoticia.php'>Panel Noticias</a>";
          echo "<a href='cerrarSesion.php'>Cerrar sesión</a>";
        }
        ?>
      </div>
    </div>

  </div>
  <div id="grad1"></div>
  <div id="cuerpo">
    
  </div>

  <div id="pie">
    <div id="rrss">
      <span>Síguenos en redes sociales</span>
      <a href="http://www.facebook.com"><img class="iconosSociales" src="images/facebook.png" /></a>
      <a href="http://twitter.com"><img class="iconosSociales" src="images/twitter.png" /></a>
      <a href="http://instagram.com"><img class="iconosSociales" src="images/instagram.png" /></a>
      <a href="http://www.tiktok.com"><img class="iconosSociales" src="images/tiktok.png" /></a>
    </div>
  </div>
</body>

</html>