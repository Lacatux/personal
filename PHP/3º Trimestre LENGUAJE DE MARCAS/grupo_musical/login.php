<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grupo Musical</title>
    <link rel="stylesheet" type="text/css" href="css/registro.css">
    <link rel="stylesheet" type="text/css" href="css/comun.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
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
          <li>
            <a href="registro.php">Registar</a>
          </li>
          <li class="active">
            <a href="login.php">Inicio sesion</a>
          </li>
        </ul>
      </div>

    </div>

    <div id="cuerpo">
      <form id="formulario" action="consultarUsuario.php" method="post">
        <label for="user">Usuario</label>
        <input type="text" id="user" name="user" placeholder="Escriba tu usuario"/>
        <br>
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password"/>
        <input type="submit" id="enviar" value="Enviar"/>
      </form>
    </div>
    <div id="pie">
      <div id="rrss">
        <span > Disponible en: </span>
        <a href="https://www.youtube.com/channel/UCyOw2FDjfQOFQH7paKxNVvA"><img class="iconossociales" src="images/youtube.png"/></a>
        <a href="https://open.spotify.com/artist/07XSN3sPlIlB2L2XNcTwJw?autoplay=true"><img class="iconossociales"src="images/spotify.png"/></a>
        <a href="https://music.youtube.com/channel/UCL0dlEc0rXV1CIawUKeme4g"><img class="iconossociales"src="images/ytmusic.png"/></a>
        <a href="https://www.deezer.com/es/artist/67/radio?autoplay=true"><img class="iconossociales"src="images/drezzer.png"/></a>
      </div>
    </div>
  </body>
</html>
