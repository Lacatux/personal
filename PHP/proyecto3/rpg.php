<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JuegAlmi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/rpg.css">
    <link rel="stylesheet" type="text/css" href="css/comun.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

  </head>
  <body>
    <div id="encabezado">
      <h1 id="tituloWeb">JuegAlmi</h1>
      <a href="index.php"><img id="logo" src="images/logo.png" alt="Logo con un ratón"/></a>
      <div id="menu">
        <ul>
          <li>
            <a href="index.php">Portada</a>
          </li>
          <li  class="active">
            <a href="generos.php">Géneros</a>
            <ul>
              <li><a href="rpg.php">RPG</a></li>
              <li><a href="#">Estrategia</a></li>
              <li><a href="#">Deportes</a></li>
            </ul>
          </li>
          <li><a href="recomendaciones.php">Recomendaciones</a></li>
        </ul>
      </div>
    </div>

    <div id="cuerpo">
      <h2>RPG</h2>
      <p>A continuación se presenta una tabla comparativa de los distintos juegos que se ofrecen:</p>
      <table>
        <tr>
          <th>Nombre</th>
          <th>Compañía</th>
          <th>Argumento</th>
          <th>Gameplay</th>
          <th>Precio</th>
          <th>Comprar</th>
        </tr>
        <tr class="impar">
          <td>Witcher 3</td>
          <td>CD Project</td>
          <td>La historia se centra en el personaje Geralt de Rivia, quien recibe una carta de su amante Yennefer de Vengerberg diciendo que necesita localizarlo lo antes posible. Geralt, después de encontrar a su amante, aprende que Ciri, nieta de Calenthe y exalumna del mismo personaje, es buscada por La Cacería Salvaj</td>
          <td>
            <video controls>
              <source src="videos/wit3.mp4" type="video/mp4">
              <source src="wit3.ogg" type="video/ogg">
            </video>
          </td>
          <td>12.50€</td>
          <td><span class="glyphicon glyphicon-shopping-cart carro"></span></td>
        </tr>
        <tr class="par">
          <td>Dark Souls</td>
          <td>From Software</td>
          <td>Gwyn, Señor de la Ceniza: Líder ganador de la guerra en contra de los Dragones, es de lejos el más poderoso de todos los seres provenientes del fuego. Su apariencia es la de un humano inusualmente alto y barbudo. Es el rey del decadente mundo de Dark souls. </td>
          <td>
            <iframe width="320" height="240" src="https://www.youtube.com/embed/AIcFGiinC5g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </td>
          <td>12€</td>
          <td><span class="glyphicon glyphicon-shopping-cart carro"></span></td>
        </tr>
      </table>
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
