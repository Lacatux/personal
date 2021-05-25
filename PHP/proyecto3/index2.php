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
      <?php
        if (isset( $_SESSION["user"] ) == false)
        {
          echo "<a class='enlaceMenu' href='register.php'>Registro</a>";
          echo "<a class='enlaceMenu' href='login.php'>Login</a>";
        } else
        {
          echo "<a class='enlaceMenu' href='createGame.php'>Crear juego</a>";
          echo "<a class='enlaceMenu' href='cerrarSesion.php'>Cerrar sesión</a>";
        }



      ?>
    </div>
  </div>

  <div id='cuerpo'>
      <?php
      $categorias = getCategorias();
      $tamArray = sizeof($categorias);
      for($i = 0; $i < $tamArray; $i++)
      {
        echo "<div id='".$categorias[$i]['nombre']."' class='genero'>";
          echo "<h2>".$categorias[$i]['nombre']."</h2>";
          $juegos = juegosCategoria($categorias[$i]['id_categoria']);
          //var_dump($juegos);

          for ($j = 0; $j < 2; $j++)
          {
            echo "<div id='".$categorias[$i]['nombre'].($j + 1)."' class='juego'>";
              echo "<img src='".$juegos[$j]['imagen']."' alt='Portada de ".$juegos[$j]['titulo']."' class='portadaJuego' />";
              echo "<h3>".$juegos[$j]['titulo']."</h3>";
              echo "<p>";
                echo $juegos[$j]['texto'];
                echo "Precio: <span>".$juegos[$j]['precio']."</span>";
              echo "</p>";
              echo "<a href='detalles.php?id_juego=".$juegos[$j]['id_juego']."'>Más información</a>";
              echo "<a href='updateGame.php?id_juego=".$juegos[$j]['id_juego']."'>Actualizar</a>";
            echo "<div class='floatClear'></div>";
            echo "</div>";
          }
          echo "<button class='botonMas'>Ver mas</button>";
        echo "</div>";
      }

      ?>
      <select id="cbCategorias">
        <?php
        $tamArray = sizeof($categorias);
        for($i = 0; $i < $tamArray; $i++) {
          echo "<option value='".$categorias[$i]['nombre']."'>".$categorias[$i]['nombre']."</option>";
        }
        ?>
      </select>
      <select id="cbJuegos">
        <option value="">Selecciona un juego</option>
      </select>
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

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/portada.js"></script>
</body>

</html>
