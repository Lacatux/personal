<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <title>XAVLEG</title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/comun.css">
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
  <?php
  session_start();
  include("datos.php");
  ?>
</head>

<body>

  <div id="encabezado">

    <h1 id="tituloWeb">XAVLEG</h1>
    <a href="index.php"><img id="logo" src="images/logo.png" alt="Logo de la banda" /></a>

    <div class="navbar">
      <a href="index.php">Inicio</a>
      <div class="dropdown">
        <button class="dropbtn">Gira
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="">Gira Completa</a>
          <a href="">Galería</a>
          <a href="">Compra de entradas</a>
        </div>
      </div>
      <a href="">Miembros</a>
      <a href="">Discografía</a>
      <div class = "navbar-right">
        <?php
        if (isset($_SESSION["user"]) == false) {
          echo "<a href='registro.php'>Registro</a>";
          echo "<a href='login.php'>Login</a>";
        } else {
          echo "<a  href='panelNoticia.php'>Panel Noticias</a>";
          echo "<a href='cerrarSesion.php'>Cerrar sesión</a>";
        }
        ?>
      </div>
    </div>

  </div>
  <div id="grad1"></div>
  <div id="cuerpo">
    <h3>Noticias</h3>
    <div class="discos">
      <h3>Discos</h3>
      <table id="tabla">
        <tr>
          <th>Nombre</th>
          <th>Fecha de Lanzamiento</th>
          <th>Número de canciones</th>
        </tr>
        <?php
        /*
        $discos = getDiscos();
        $tamArray = sizeOf($discos);
        for ($i = 0; $i < $tamArray; $i++) {
          echo "<tr>
            <td>" . $discos[$i]['nombre'] . "</td>
            <td>" . $discos[$i]['fecha_lanzamiento'] . "</td>
            <td>" . $discos[$i]['num_canciones'] . "</td>          
            </tr>";
        }
        */
        ?>
      </table>
    </div>
    
    <div>
    <div id="noticias" class="categoria" style="color:black">
        <h2 class="titulo">Últimas Noticias</h2>
          <div class="post">
            <h3>Nuevo logo</h3>
            <img src="images/logo.jpg" alt="foto del logotipo" class="img">
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit eu, molestie id nullam interdum accumsan cras aenean tortor enim, ultricies imperdiet sed lectus nisl rutrum condimentum. Sapien non ligula pellentesque enim condimentum accumsan eros volutpat, luctus sollicitudin dignissim potenti convallis parturient aliquet consequat est, natoque sodales curabitur morbi sem montes arcu.
            </p>

          </div>
          <div class="post">
            <h3>Nuevo Merchandising</h3>
            <img src="images/chanclas.jpg" alt="chancletas del grupo" class="img">
            <img src="images/asiento.jpg" alt="asientos del grupo" class="img">
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit eu, molestie id nullam interdum accumsan cras aenean tortor enim, ultricies imperdiet sed lectus nisl rutrum condimentum. Sapien non ligula pellentesque enim condimentum accumsan eros volutpat, luctus sollicitudin dignissim potenti convallis parturient aliquet consequat est, natoque sodales curabitur morbi sem montes arcu.</p>
          </div>
      </div>

      <div id="fechas" class="categoria" style="color:black">
        <h2 class="titulo">Próximas fechas de gira</h2>
        <table id="tabla" class="post">
          <tr>
            <td>Fever / Santana 27</td>
            <td>19/11/2022</td>
            <td>20.00€</td>
          </tr>
          <tr>
            <td>Dabadaba</td>
            <td>21/11/2022</td>
            <td>20.50€</td>
          </tr>
          <tr>
            <td>Razzmatazz</td>
            <td>24/11/2022</td>
            <td>25.00€</td>
          </tr>
        </table>
      </div>

      <div id="resumen" class="categoria" style="color:black">
        <h2>Merchandising</h2>
        <div class="resmerch">
          <div class="floatClear">
            <img src="images/hoodie.jpeg" alt="sudadera xavleg" class="merch">
            <p>Sudadera de Xavleg</p>
          </div>
          <div class="floatClear">
            <img src="images/cami.jpeg" alt="camiseta xavleg" class="merch">
            <p>Camiseta de Xavleg</p>
          </div>
          <div class="floatClear">
            <img src="images/manta.jpeg" alt="edredón xavleg" class="merch">
            <p>Edredón de Xavleg con funde de almohada</p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div id="pie">
    <div id="rrss">
      <span>Síguenos en redes sociales</span>
      <a href="http://www.facebook.com"><img class="iconosSociales" src="images/facebook.png" /></a>
      <a href="http://twitter.com"><img class="iconosSociales" src="images/twitter.png" /></a>
      <a href="http://instagram.com"><img class="iconosSociales" src="images/instagram.png" /></a>
      <a href="http://www.tiktok.com"><img class="iconosSociales" src="images/tiktok.png" /></a>
    </div>
  </div>
</body>

</html>