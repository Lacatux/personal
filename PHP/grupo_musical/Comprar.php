<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grupo Musical</title>

    <link rel="stylesheet" type="text/css" href="css/comprar.css">
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
      <table>
        <tr>
          <th>Fecha</th>
          <th>Pais</th>
          <th>Comprar</th>
        </tr>
        <tr>
          <td>04 julio 2021</td>
          <td>España, Madrid</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4201298">Comprar Aqui</a></td>
        </tr>
        <tr class="par">
          <td>28 noviembre 2020</td>
          <td>Peru, Lima,costa verde</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4225228">Comprar Aqui</a></td>
        </tr>
        <tr>
          <td> 04 diciembre 2020</td>
          <td>Costa Rica, San Jose,estadio nacional de Costa Rica</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4225223">Comprar Aqui</a></td>
        </tr>
        <tr class="par">
          <td>02 junio 2021</td>
          <td>Belgica, Sportaleis,Antwerpen</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4641539">Comprar Aqui</a></td>
        </tr>
        <tr>
          <td>04-06 junio 2021</td>
          <td>Reino Unido, Donington Park, Derb</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-3914722">Comprar Aqui</a></td>
        </tr>
        <tr class="par">
          <td>08 junio 2021</td>
          <td>Francia, Accorhotels Arena, Paris</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4204096">Comprar Aqui</a></td>
        </tr>
        <tr>
          <td>10 junio 2021</td>
          <td>Alemania, Westfalenhalle1, Dortmund</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4201761">Comprar Aqui</a></td>
        </tr>
        <tr class="par">
          <td>12 junio 2021</td>
          <td>Polonia, Atlas Arena, Lodz</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4206576">Comprar Aqui</a></td>
        </tr>
        <tr>
          <td>15 junio 2021</td>
          <td>Alemania, Barclaycard Arena Hamburg</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4201762">Comprar Aqui</a></td>
        </tr>
        <tr class="par">
          <td>19 junio 2021</td>
          <td>Suecia, Scandinavium, Göteborg</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4239338">Comprar Aqui</a></td>
        </tr>
        <tr>
          <td>21 junio 2021</td>
          <td>Finlandia,Hartwall Arena, Helsinki</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4234493">Comprar Aqui</a></td>
        </tr>
        <tr class="par">
          <td>23 JUNIO 2021</td>
          <td>Suecia, Scandinavium, Góteborg</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4239339">Comprar Aqui</a></td>
        </tr>
        <tr>
          <td>25 junio 2021</td>
          <td>Alemania, Festhallen Frankfurt, Frankfurt</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4201763">Comprar Aqui</a></td>
        </tr>
        <tr class="par">
          <td>27 junio 2021</td>
          <td>Austria, Wiener statdhalle - Halle D, Wien</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4675974">Comprar Aqui</a></td>
        </tr>
        <tr>
          <td>30 junio 2021</td>
          <td>Suiza, Hallenstadion, Zürich</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4641286">Comprar Aqui</a></td>
        </tr>
        <tr class="par">
          <td>06 julio 2021</td>
          <td>Francia, Arènes de Nîmes</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4645908">Comprar Aqui</a></td>
        </tr>
        <tr>
          <td>08 julio 2021</td>
          <td>Alemania, Hanns-Matin-Schleyer-Halle, Stuttgart</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4201764">Comprar Aqui</a></td>
        </tr>
        <tr class="par">
          <td>10 julio 2021</td>
          <td>Republica Checa, O2 Arena, Prague</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4230505">Comprar Aqui</a></td>
        </tr>
        <tr>
          <td>12 julio 2021</td>
          <td>Italia, Arena di Verona, Verona</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4211521">Comprar Aqui</a></td>
        </tr>
        <tr class="par">
          <td>15 julio 2021</td>
          <td>Hungría, Papp Lásló Budapest Sportaréna, Budapest</td>
          <td><a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Kiss-Entradas/E-4204203">Comprar Aqui</a></td>
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
