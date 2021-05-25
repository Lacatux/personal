<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JuegAlmi</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/comun.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  </head>
  <body>
    <div id="encabezado">
      <h1 id="tituloWeb">JuegAlmi</h1>
      <a href="index.php"><img id="logo" src="images/logo.png" alt="Logo con un ratón"/></a>
      <div id="menu">
        <ul>
          <li class="active">
            <a href="index.php">Portada</a>
          </li>
          <li>
            <a href="generos.php">Géneros</a>
            <ul>
              <li><a href="rpg.php">RPG</a></li>
              <li><a href="#">Estrategia</a></li>
              <li><a href="#">Deportes</a></li>
            </ul>
          </li>
          <li><a href="recomendaciones.php">Recomendaciones</a></li>
        </ul>
        <a class="enlaceMenu" href="register.php">Registro</a>
        <a class="enlaceMenu" href="login.php">Login</a>
      </div>
    </div>

    <div id="cuerpo">
      <form id="formulario" action="consultarUsuario.php" method="post">
        <label for="user">Usuario</label>
        <input type="text" id="user" name="user" placeholder="Escriba su usuario"/>
        <br />
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" />
        <br />
        <input type="submit" id="enviar" value="Enviar"/>
      </form>

      <div id="anim">
        <div id="balon"><img src="images/pelota.png" height="80px"/></div>
      </div>
    </div>

    <div id="pie">
      <div id="rrss">
        <span>Síguenos en redes sociales</span>
        <a href="http://www.facebook.com"><img class="iconosSociales" src="images/facebook.png"/></a>
        <a href="http://twitter.com"><img class="iconosSociales" src="images/twitter.png"/></a>
        <a href="http://instagram.com"><img class="iconosSociales" src="images/instagram.png"/></a>
        <a href="http://www.tiktok.com"><img class="iconosSociales" src="images/tiktok.png"/></a>
      </div>
    </div>

  </body>
</html>
