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
   if (isset( $_SESSION["user"] ) == false)
   {
     header("location: login.php");
   }
   include("datos.php");
   ?>
  
  </head>
  <body>

    <div id="encabezado">
      <h1 id="tituloWeb">XAVLEG</h1>
      <a href="index.php"><img id="logo" src="images/logo.png" alt="Logo de la banda"/></a>
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
          <li>
            <a>Registro</a>
          </li>
        </ul>
      </div>
    </div>

    <div id="cuerpo">
    <form id="formulario" action="bajaNoticia.php" method="post">
            <div>
                <h2>Borrar Noticia</h2>
                <label for="number">ID de la Noticia</label>
                <input type="number" id="id" name="id"/><br>
                </div>
            <input id="enviar" type="submit" value="Enviar" />
        </form>
    </div>

    <div id="pie">
      <div id="rrss">
        <span>Síguenos en redes sociales</span>
        <a href="http://www.facebook.com"><img class="iconosSociales" src="images/facebook.png"/></a>
        <a href="http://twitter.com"><img class="iconosSociales" src="images/twitter.png"/></a>
        <a href="http://instagram.com"><img class="iconosSociales" src="images/instagram.png"/></a>
        <a href="http://www.tiktok.com"><img class="iconosSociales" src="images/tiktok.png"/></a>
      </div>
    </div>

  </body>

</html>
