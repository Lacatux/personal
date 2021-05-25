<!DOCTYPE html>
<html lang='es' dir='ltr'>

<head>
  <meta charset='utf-8'>
  <title>JuegAlmi</title>
  <link rel='stylesheet' type='text/css' href='css/style.css'>
  <link rel='stylesheet' type='text/css' href='css/comun.css'>
  <link href='https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap' rel='stylesheet'>
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
      <form id="formulario" action="altaJuego.php" method="post">
        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" name="titulo" placeholder="Escriba el titulo" /><br>
        <label for="descripcion">Contraseña</label>
        <input type="text" id="descripcion" name="descripcion" placeholder="Escriba la descripcion" /><br>
        <label for="imagen">Imagen</label>
        <input type="text" id="imagen" name="imagen" placeholder="Escriba la ruta de la imagen" /><br>
        <label for="precio">Precio</label>
        <input type="text" id="precio" name="precio" placeholder="Escriba el precio" /><br>
        <label for="categoria">Categoria</label>
        <select id="categoria" name="categoria">
          <?php
            $categorias = getCategorias();
            $tamArray = sizeof($categorias);
            for($i = 0; $i < $tamArray; $i++)
            {
              echo "<option value='".$categorias[$i]['id_categoria']."'>".$categorias[$i]['nombre']."</option>";
            }
           ?>
        </select><br />
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

</body>

</html>
