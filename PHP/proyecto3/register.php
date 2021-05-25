<!DOCTYPE html>
<html lang='es' dir='ltr'>

<head>
  <meta charset='utf-8'>
  <title>JuegAlmi</title>
  <link rel='stylesheet' type='text/css' href='css/register.css'>
  <link rel='stylesheet' type='text/css' href='css/comun.css'>
  <link href='https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap' rel='stylesheet'>
  <?php
  include("datos.php");
  ?>
</head>

<body>
  <div id='encabezado'>
    <h1 id='tituloWeb'>JuegAlmi</h1>
    <a href='index.php'><img id='logo' src='images/logo.png' alt='Logo con un ratón' /></a>
    <div id='menu'>
      <ul>
        <li class='active'>
          <a href='index.php'>Portada</a>
        </li>
        <li>
          <a href='generos.php'>Géneros</a>
          <ul>
            <li><a href='rpg.php'>RPG</a></li>
            <li><a href='#'>Estrategia</a></li>
            <li><a href='#'>Deportes</a></li>
          </ul>
        </li>
        <li><a href='recomendaciones.php'>Recomendaciones</a></li>
      </ul>
      <a class='enlaceMenu' href='register.php'>Registro</a>
      <a class='enlaceMenu' href='login.php'>Login</a>
    </div>
  </div>

    <div id='cuerpo'>
      <div id="mensajeError">
        <p>Mensaje Error que cambiará después</p>
      </div>
      <form id="formulario" action="altaUsuario.php" method="post">
        <div id="infoWeb">
          <h2>Información para la web</h2>
          <label for="user">Usuario</label>
          <input type="text" id="user" name="user" placeholder="Escriba su usuario" /><br>
          <label for="password">Contraseña</label>
          <input type="password" id="password" name="password" placeholder="Escriba su contraseña" /><br>
          <label for="repassword">Repita su contraseña</label>
          <input type="repassword" id="repassword" name="repassword" placeholder="Repita su contraseña" /><br>
        </div>
        <div id="infoPersonal">
          <h2>Información personal</h2>
          <label for="name">Nombre</label>
          <input type="text" id="name" name="name" placeholder="Escriba su nombre" /><br>
          <label for="apellido1">Apellido 1</label>
          <input type="text" id="apellido1" name="apellido1" placeholder="Escriba su primer apellido" /><br>
          <label for="apellido2">Apellido 2</label>
          <input type="text" id="apellido2" name="apellido2" placeholder="Escriba su segundo apellido" /><br>
          <label for="email">Email</label>
          <input type="text" id="email" name="email" placeholder="Escriba su email" /><br>
        </div>
        <input type="button" id="cambiarFormulario" value="Mostrar siguiente" />
        <input id="enviar" type="submit" value="Enviar"/>
      </form>
    </div>
    <div id='pie'>
      <div id='rrss'>
        <span>Síguenos en redes sociales</span>
        <a href='http://www.facebook.com'><img class='iconosSociales' src='images/facebook.png' /></a>
        <a href='http://twitter.com'><img class='iconosSociales' src='images/twitter.png' /></a>
        <a href='http://instagram.com'><img class='iconosSociales' src='images/instagram.png' /></a>
        <a href='http://www.tiktok.com'><img class='iconosSociales' src='images/tiktok.png' /></a>
      </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/registro.js"></script>
</body>
</html>
