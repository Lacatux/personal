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
    <div id="menu">
      <ul>
        <li class="active">
          <a href="index.php">Inicio</a>
        </li>
        <li>
          <a href="gira.html">Gira</a>
          <ul>
            <li><a>Gira Completa</a></li>
            <li><a>Galería</a></li>
            <li><a>Compra de entradas</a></li>
          </ul>
        </li>
        <li>
          <a>Miembros</a>
        </li>
        <li>
          <a>Discografía</a>
        </li>
        <?php
        if (isset($_SESSION["user"]) == false) {
          echo "<li><a class='enlaceMenu' href='registro.php'>Registro</a></li>";
          echo "<li><a class='enlaceMenu' href='login.php'>Login</a></li>";
        } else {
          echo "<li><a class='enlaceMenu' href='createNoticia.php'>Crear Noticia</a></li>";
          echo "<li><a class='enlaceMenu' href='panelNoticia.php'>Panel Noticias</a></li>";
          echo "<li><a class='enlaceMenu' href='cerrarSesion.php'>Cerrar sesión</a></li>";
        }
        ?>
      </ul>

    </div>
  </div>

  <div id="cuerpo">
    <h3>Noticias</h3>
    <div class="discos">
      <h3>Discos</h3>
      <table id="tabla">
        <tr>
          <th>Nombre</th>
          <th>Fecha de Lanzamiento</th>
          <th>Número de canciones</th>
        </tr>
        <?php
        $discos = getDiscos();
        $tamArray = sizeOf($discos);
        for ($i = 0; $i < $tamArray; $i++) {
          echo "<tr>
            <td>" . $discos[$i]['nombre'] . "</td>
            <td>" . $discos[$i]['fecha_lanzamiento'] . "</td>
            <td>" . $discos[$i]['num_canciones'] . "</td>          
            </tr>";
        }
        ?>
      </table>
    </div>
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