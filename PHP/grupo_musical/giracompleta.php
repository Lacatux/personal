<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grupo Musical</title>
    <link rel="stylesheet" type="text/css" href="css/giracompleta.css">
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
      <div id="anim">
          <div id="rayo"><img src="images/rayo.png" height="300px" width="250px"></div>
      </div>
      <table>
        <tr>
          <th>Fecha</th>
          <th>Pais</th>
          <th>Lugar</th>
        </tr>
        <tr>
          <td>04 julio 2021</td>
          <td>España</td>
          <td>Madrid</td>
        </tr>
        <tr class="par">
          <td>28 noviembre 2020</td>
          <td>Peru</td>
          <td>Lima,costa verde</td>
        </tr>
        <tr>
          <td> 04 diciembre 2020</td>
          <td>Costa Rica</td>
          <td>San Jose,estadio nacional de Costa Rica</td>
        </tr>
        <tr class="par">
          <td>02 junio 2021</td>
          <td>Belgica</td>
          <td>Sportaleis,Antwerpen</td>
        </tr>
        <tr>
          <td>04-06 junio 2021</td>
          <td>Reino Unido</td>
          <td>Donington Park, Derby</td>
        </tr>
        <tr class="par">
          <td>08 junio 2021</td>
          <td>Francia</td>
          <td>Accorhotels Arena, Paris</td>
        </tr>
        <tr>
          <td>10 junio 2021</td>
          <td>Alemania</td>
          <td>Westfalenhalle1, Dortmund</td>
        </tr>
        <tr class="par">
          <td>12 junio 2021</td>
          <td>Polonia</td>
          <td>Atlas Arena, Lodz</td>
        </tr>
        <tr>
          <td>15 junio 2021</td>
          <td>Alemania</td>
          <td>Barclaycard Arena Hamburg</td>
        </tr>
        <tr class="par">
          <td>19 junio 2021</td>
          <td>Suecia</td>
          <td>Scandinavium, Göteborg</td>
        </tr>
        <tr>
          <td>21 junio 2021</td>
          <td>Finlandia</td>
          <td>Hartwall Arena, Helsinki</td>
        </tr>
        <tr class="par">
          <td>23 JUNIO 2021</td>
          <td>Suecia</td>
          <td>Scandinavium, Góteborg</td>
        </tr>
        <tr>
          <td>25 junio 2021</td>
          <td>Alemania</td>
          <td>Festhallen Frankfurt, Frankfurt</td>
        </tr>
        <tr class="par">
          <td>27 junio 2021</td>
          <td>Austria</td>
          <td>Wiener statdhalle - Halle D, Wien</td>
        </tr>
        <tr>
          <td>30 junio 2021</td>
          <td>Suiza</td>
          <td>Hallenstadion, Zürich</td>
        </tr>
        <tr class="par">
          <td>06 julio 2021</td>
          <td>Francia</td>
          <td>Arènes de Nîmes</td>
        </tr>
        <tr>
          <td>08 julio 2021</td>
          <td>Alemania</td>
          <td>Hanns-Matin-Schleyer-Halle, Stuttgart</td>
        </tr>
        <tr class="par">
          <td>10 julio 2021</td>
          <td>Republica Checa</td>
          <td>O2 Arena, Prague</td>
        </tr>
        <tr>
          <td>12 julio 2021</td>
          <td>Italia</td>
          <td>Arena di Verona, Verona</td>
        </tr>
        <tr class="par">
          <td>15 julio 2021</td>
          <td>Hungría</td>
          <td>Papp Lásló Budapest Sportaréna, Budapest</td>
        </tr>
      </table>
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
