<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grupo Musical</title>
    <link rel="stylesheet" type="text/css" href="css/gira.css">
    <link rel="stylesheet" type="text/css" href="css/comun.css">
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
            <a href="gira.html">Gira <i class="icon ion-md-arrow-dropdown"></i></a>
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
      <div class="giraactual">
        <h2>Gira Actual</h2>
        <p>
          el grupo de Kiss actualmente va a realizar una gira por todo el globo terraqueo. Actualmente con
          la existencia del Sars Cov 2 el grupo actualmente tiene previsto ir a America y Eupopa y mas adelante dar concirtos en todo Asia y Oceania
          la gira empezara a finales de octubre teniendo su primer concierto en America del sur.
          Los conciertos contaran con las medidas sanitarias, para evitar el contaguio tanto de los clientes como de los integrantes del Grupo. Esto lleva
          a que el aforo en los conciertos haya variado en comparacon con los años anteriores.
        </p>
        <table>
          <tr>
            <th>Fecha</th>
            <th>Pais</th>
            <th>lugar</th>
          </tr>
          <tr>
            <td>04 julio 2021</td>
            <td>España</td>
            <td>Madrid</td>
          </tr>
          <tr>
            <td>28 noviembre 2020</td>
            <td>Peru</td>
            <td>Lima,costa verde</td>
          </tr>
          <tr>
            <td> 13 diciembre 2020</td>
            <td>Costa Rica</td>
            <td>San Jose,estadio nacional de Costa Rica</td>
          </tr>
        </table>
        <div class="masinformacion">
        <p>
          Para mas informacion de la gira, dirigase a los distintos apartados dentro de gira y no olvide pasar por nuestra galeria de
          imagenes del grupo hechas por los fannes y de algunas fotos saca tomadas antes del concierto por nuestro fotografo.
        </p>
        </div>

      </div>
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
