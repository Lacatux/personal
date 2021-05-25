<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grupo Musical</title>
    <link rel="stylesheet" type="text/css" href="css/comun.css">
    <link rel="stylesheet" type="text/css" href="css/galeria.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <?php
  session_start();
  include("datos.php");
  ?>
  </head>
  <body>
    <div id="encabezado">
      <img src="images/portada.jpg" alt="portada Kiss" class="portada"/>

      <div id="menu">
        <ul>
          <li>
            <a href="index.php">Inicio</a>
          </li>
          <li class="active">
            <a href="gira.php">Gira <i class="icon ion-md-arrow-dropdown"></i></a>
            <ul>
              <li><a href="giracompleta.php">Gira completa</a></li>
              <li><a href="galeria.php">Galeria</a></li>
              <li><a href="Comprar.php">Entradas</a></li>
            </ul>
          </li>
          <li>
            <a href="miembros.php">Miembros</a>
          </li>
          <li>
            <a href="discografia.php">Discografia</a>
          </li>
          <?php
        if (isset( $_SESSION["user"] ) == false){
          echo "<li>";
            echo"<a href='registro.php'>Registar</a>";
          echo "</li>";
          echo"<li>";
            echo"<a href='login.php'>Inicio sesion</a>";
          echo"</li>";
        }
        else {
          echo "<li>";
            echo"<a href='cerrarSesion.php'>Cerrar Sesion</a>";
          echo "</li>";
          echo"<li>";
            echo"<a href='createnews.php'>Crear Noticia</a>";
          echo"</li>";
        }
          ?>
        </ul>
      </div>

    </div>

    <div id="cuerpo">
      <h2>Galeria</h2>
      <p>Escucha algunas canciones mientras miras la galeria:</p>
      <audio controls>
        <source src="sonido/sonido1.mp3"/>
      </audio>
      <br>
      <audio controls>
        <source src="sonido/sonido2.mp3"/>
      </audio>
      <div class="galeria1">
          <img src="images/galeria1.jpg" alt="Kiss" class="galeria"/>
          <img src="images/galeria2.jpg" alt="Kiss" class="galeria"/>
          <img src="images/galeria3.jpg" alt="Kiss" class="galeria"/>
          <img src="images/galeria4.jpg" alt="Kiss" class="galeria"/>
          <img src="images/galeria5.jpg" alt="Kiss" class="galeria"/>
          <img src="images/galeria6.png" alt="Kiss" class="galeria"/>
          <div class="floatClear"></div>
      </div>
      <video controls class="video">
          <source src=video/video1.webm>
      </video>
      <video controls class="video">
          <source src=video/video2.webm>
      </video>
    </div>
    <div id="pie">
      <div id="rrss">
        <span> Disponible en: </span>
        <a href="https://www.youtube.com/channel/UCyOw2FDjfQOFQH7paKxNVvA"><img class="iconossociales" src="images/youtube.png"/></a>
        <a href="https://open.spotify.com/artist/07XSN3sPlIlB2L2XNcTwJw?autoplay=true"><img class="iconossociales"src="images/spotify.png"/></a>
        <a href="https://music.youtube.com/channel/UCL0dlEc0rXV1CIawUKeme4g"><img class="iconossociales"src="images/ytmusic.png"/></a>
        <a href="https://www.deezer.com/es/artist/67/radio?autoplay=true"><img class="iconossociales"src="images/drezzer.png"/></a>
      </div>
    </div>
  </body>
</html>
