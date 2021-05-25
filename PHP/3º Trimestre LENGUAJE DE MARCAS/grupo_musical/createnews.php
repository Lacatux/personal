<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grupo Musical</title>
    <link rel="stylesheet" type="text/css" href="css/registro.css">
    <link rel="stylesheet" type="text/css" href="css/comun.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
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
      <img src="images/portada.jpg" alt="portada Kiss" class="portada"/>
      <div id="menu">
        <ul>
          <li>
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
          echo"<li class='active'>";
            echo"<a href='createnews.php'>Crear Noticia</a>";
          echo"</li>";
        }
          ?>
        </ul>
      </div>

      <div id="cuerpo">
      <form id="formulario" action="altaNoticia.php" method="post">

        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" name="titulo" placeholder="Escriba el titulo"/><br>
        <label for="descripcion">Resumen</label>
        <input type="text" id="resumen" name="resumen" placeholder="Escriba el resumen"/><br>
        <label for="descripcion">contenido</label>
        <input type="text" id="descripcion" name="descripcion" placeholder="Escriba la descripcion"/><br>
        <label for="imagen">Imagen</label>
        <input type="text" id="imagen" name="imagen" placeholder="Escriba la ruta de la imagen"/><br>
        <label for="tag">Tag</label>
        <?php
        echo "<select class='primerbox' name='primerbox'>";
        $tags = tags();
        $tamArray = sizeof($tags);
        for($i = 0; $i < $tamArray; $i++)
        {
          echo "<option value='".$tags[$i]['id_tag']."'>".$tags[$i]['nombre']."</option>";
        }
        echo "</select>";
        ?>
        <br>
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
