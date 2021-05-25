<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grupo Musical</title>

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
          <li class="active">
            <a href="index.php">Inicio</a>
          </li>
          <li>
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
          echo"<li>";
            echo"<a href='createmiembros.php'>Crear Miembros</a>";
          echo"</li>";
        }
          ?>
        </ul>
      </div>
    </div>
    <div id="cuerpo">
      <h2>Filtro</h2>
      <div id="elementosFiltro">
        <label for="filtro">Introducir busqueda</label>
        <input type="text" id="filtro" name="filtro">
        <input type="button" id="limpiarFiltro" value="Limpiar">
      </div>
      <table id="tablaNoticias">
        <tr>
          <th>Fecha</th>
          <th>Titulo</th>
          <th>Editar</th>
          <th>Borrar</th>
        </tr>
          <?php
          $noticias = noticias();
          for ($i = 0; $i < sizeof($noticias); $i++) {
            echo "<tr>";
            echo "<td>".$noticias[$i]['fecha']."</td>";
            echo "<td>".$noticias[$i]['titulo']."</td>";
            echo "<td><a href='#' class='editar'><img src='https://img.icons8.com/pastel-glyph/64/000000/edit--v1.png' value='".$noticias[$i]['id_noticia']."'/></a></td>";
            echo "<td class='borrar'><a href= 'borrarnoticia.php?id_noticia=".$noticias[$i]['id_noticia']."'><img src='https://img.icons8.com/flat-round/64/000000/delete-sign.png'/></a></td>";
            echo "</tr>";
          }
           ?>
           <a href="#" value="" class=""></a>
      </table>
    <p><ion-icon name="create-outline"></ion-icon></p>
    </div>
      <div id="pie">
        <div id="rrss">
          <span>Disponible en:</span>
          <a href="https://www.youtube.com/channel/UCyOw2FDjfQOFQH7paKxNVvA"><img class="iconossociales" src="images/youtube.png"/></a>
          <a href="https://open.spotify.com/artist/07XSN3sPlIlB2L2XNcTwJw?autoplay=true"><img class="iconossociales"src="images/spotify.png"/></a>
          <a href="https://music.youtube.com/channel/UCL0dlEc0rXV1CIawUKeme4g"><img class="iconossociales"src="images/ytmusic.png"/></a>
          <a href="https://www.deezer.com/es/artist/67/radio?autoplay=true"><img class="iconossociales"src="images/drezzer.png"/></a>
        </div>
      </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/seleccion.js"></script>
    </body>
  </html>
