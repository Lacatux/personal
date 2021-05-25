<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grupo Musical</title>
    <link rel="stylesheet" type="text/css" href="css/registro.css">
    <link rel="stylesheet" type="text/css" href="css/comun.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <?php
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
          <li class="active">
            <a href="registro.php">Registar</a>
          </li>
          <li>
            <a href="login.php">Inicio sesion</a>
          </li>
        </ul>
      </div>

    </div>

    <div id="cuerpo">
      <div id="mensajeError">
        <p>Mensaje Error que cambiará después</p>
      </div>
      <form id="formulario" action="altaUsuario.php" method="post">
        <label for="user">Usuario</label>
        <input type="text" id="user" name="user" placeholder="Escriba tu usuario"/>
        <p id="resultado"></p>
        <br>
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password"/>
        <br>
        <label for="password">Repite Contraseña</label>
        <input type="password" id="repassword" name="password"/>
        <br>
        <label for="email">Correo electronico</label>
        <input type="email"  id="email" name="email" placeholder="***@gmail/homail.com"/>
        <br>
        <label for="fecha">Fecha de nacimiento</label>
        <input type="date"  id="date" name="date"/>
        <br>
        <input type="radio" name="termino">Acepto los terminos y a recibit notificaciones y pomociones    procedentes de esta pagina.
        <br>
        <input type="radio" name="termino">Acepto los terminos, solamente.
        <br>
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
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/registro.js"></script>
  </body>
</html>
