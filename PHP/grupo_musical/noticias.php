<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grupo Musical</title>

    <link rel="stylesheet" type="text/css" href="css/comun.css">

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
            <a href="gira.php">Gira</a>
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
      <?php
      echo "<select class='primerbox' name='primerbox'>";
      $tags = tags();
      $tamArray = sizeof($tags);
      echo "<option></option>";
      for($i = 0; $i < $tamArray; $i++)
      {
        echo "<option value='".$tags[$i]['id_tag']."'>".$tags[$i]['nombre']."</option>";
      }
      echo "</select>";


    //HACERLO CON AJAX
    echo "<select class='segundobox' name='segundobox'>";
    echo "<option></option>";
    echo "</select>";

    echo "<select class='tercerbox' name='tercerbox'>";
    echo "<option></option>";
    echo "</select>";
    ?>
    <div id="detallesNoticia">

    </div>
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
    <script src="js/noticias.js"></script>
    </body>
  </html>
