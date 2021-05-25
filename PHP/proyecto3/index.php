<!DOCTYPE html>
<html lang='es' dir='ltr'>

<head>
  <meta charset='utf-8'>
  <title>JuegAlmi</title>
  <link rel='stylesheet' type='text/css' href='css/style.css'>
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
    <div id='rpg' class='genero'>
    <h2>RPG</h2>

      <?php
      $juegos = juegosCategoria(1);
      for ($i = 0; $i < sizeof($juegos); $i++) {
      ?>
        <div id='RPG<?= $i + 1 ?>' class='juego'>
          <img src='<?= $juegos[$i]['imagen'] ?>' alt='Portada de <?= $juegos[$i]['titulo'] ?>' class='portadaJuego' />
          <h3><?= $juegos[$i]['titulo'] ?></h3>
          <p>
            <?= $juegos[$i]['texto'] ?>
            Precio: <span><?= $juegos[$i]['precio'] ?></span>
          </p>
          <a href='<?= $juegos[$i]['enlace'] ?>'>Más información</a>
          <div class='floatClear'></div>
        </div>
      <?php
      }
      ?>
    </div>

    <div id='estrategia' class='genero'>
      <h2>Estrategia</h2>
      <?php
      $juegos = juegosCategoria(6);
      for ($i = 0; $i < sizeof($juegos); $i++) {
      ?>
        <div id='estra<?= $i + 1 ?>' class='juego'>
          <img src='<?= $juegos[$i]['imagen'] ?>' alt='Portada de <?= $juegos[$i]['titulo'] ?>' class='portadaJuego' />
          <h3><?= $juegos[$i]['titulo'] ?></h3>
          <p>
            <?= $juegos[$i]['texto'] ?>
            Precio: <span><?= $juegos[$i]['precio'] ?></span>
          </p>
          <a href='<?= $juegos[$i]['enlace'] ?>'>Más información</a>
          <div class='floatClear'></div>
        </div>
      <?php
      }
      ?>
    </div>

    <div id='deportes' class='genero'>
      <h2>Deportes</h2>
      <?php
      $juegos = juegosCategoria(3);
      for ($i = 0; $i < sizeof($juegos); $i++) {
      ?>
        <div id='deporte<?= $i + 1 ?>' class='juego'>
          <img src='<?= $juegos[$i]['imagen'] ?>' alt='Portada de <?= $juegos[$i]['titulo'] ?>' class='portadaJuego' />
          <h3><?= $juegos[$i]['titulo'] ?></h3>
          <p>
            <?= $juegos[$i]['texto'] ?>
            Precio: <span><?= $juegos[$i]['precio'] ?></span>
          </p>
          <a href='<?= $juegos[$i]['enlace'] ?>'>Más información</a>
          <div class='floatClear'></div>
        </div>
      <?php
      }
      ?>
    </div>

    <div id='accion' class='genero'>
      <h2>Accion</h2>
      <?php
      $juegos = juegosCategoria(7);
      for ($i = 0; $i < sizeof($juegos); $i++) {
      ?>
        <div id='accion<?= $i + 1 ?>' class='juego'>
          <img src='<?= $juegos[$i]['imagen'] ?>' alt='Portada de <?= $juegos[$i]['titulo'] ?>' class='portadaJuego' />
          <h3><?= $juegos[$i]['titulo'] ?></h3>
          <p>
            <?= $juegos[$i]['texto'] ?>
            Precio: <span><?= $juegos[$i]['precio'] ?></span>
          </p>
          <a href='<?= $juegos[$i]['enlace'] ?>'>Más información</a>
          <div class='floatClear'></div>
        </div>
      <?php
      }
      ?>
    </div>
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
