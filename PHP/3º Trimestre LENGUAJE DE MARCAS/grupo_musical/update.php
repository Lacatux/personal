<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grupo Musical</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/comun.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <?php
  session_start();
  include("datos.php");
  if (isset( $_SESSION["user"] ) == false)
  {
    header("location: login.php");
  }
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
        }
          ?>
        </ul>
      </div>
    </div>
    <div id="cuerpo">
      <form id="formulario" action="modificanoticia.php" method="post">

        <?php
        $noticias = noticiasbyid($_GET['id_noticia']);
        echo "<input type='hidden' id='id_noticia' name='id_noticia' value='".$noticias['id_noticia']."'/>";
        echo "<label for='titulo'>Titulo</label>";
        echo "<input type='text' id='titulo' name='titulo' placeholder='Escriba el titulo' value='".$noticias['titulo']."'/><br>";
        echo "<label for='descripcion'>Resumen</label>";
        echo "<input type='text' id='resumen' name='resumen' placeholder='Escriba el resumen' value='".$noticias['resumen']."'/><br>";
        echo"<label for='descripcion'>Contenido</label>";
        echo "<input type='text' id='descripcion' name='descripcion' placeholder='Escriba la noticia entera' value='".$noticias['texto']."'/><br>";
        echo"<label for='imagen'>Imagen</label>";
        echo "<input type='text' id='imagen' name='imagen' placeholder='Escriba la ruta de la imagen' value='".$noticias['imagen']."'/><br>";
        ?>
      <input id="enviar" type="submit" value="Enviar"/>
      </form>
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
    </body>
  </html>
