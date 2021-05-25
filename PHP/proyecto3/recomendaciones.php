<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JuegAlmi</title>
    <link rel="stylesheet" type="text/css" href="css/recomendaciones.css">
    <link rel="stylesheet" type="text/css" href="css/comun.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  </head>
  <body>
    <div id="encabezado">
      <h1 id="tituloWeb">JuegAlmi</h1>
      <a href="index.php"><img id="logo" src="images/logo.png" alt="Logo con un ratón"/></a>
      <div id="menu">
        <ul>
          <li><a href="index.php">Portada</a></li>
          <li><a href="generos.php">Géneros</a></li>
          <li class="active"><a href="recomendaciones.php">Recomendaciones</a></li>
        </ul>
      </div>
    </div>

    <div id="cuerpo">
      <h2>Recomendaciones</h2>
      <div id="elementosFiltro">
        <label for="filtro">Introducir búsqueda</label>
        <input type="text" id="filtro" name="filtro" />
        <select id="campos">
          <option value="nombre">Nombre</option>
          <option value="precio">Precio</option>
          <option value="categoria">Categoria</option>
        </select>
        <input type="button" id="limpiarFiltro" value="Limpiar Filtro" />
      </div>
      <table id="tablaRecomendaciones">
        <tr>
          <th>Juego</th>
          <th>Precio</th>
          <th>Categoría</th>
        </tr>
        <?php
          include "datos.php";
          $categorias = getCategorias();

          $numCategorias = sizeof($categorias);
          for($i = 0; $i < $numCategorias; $i++)
          {
            $juegos = juegosCategoria($categorias[$i]["id_categoria"]);
            $numJuegos = sizeof($juegos);
            for($j = 0; $j < $numJuegos; $j++)
            {
              echo "<tr>";
                echo "<td>".$juegos[$j]["titulo"]."</td>";
                echo "<td>".$juegos[$j]["precio"]."</td>";
                echo "<td>".$categorias[$i]["nombre"]."</td>";
              echo "</tr>";
            }
          }
         ?>
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
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/recomendaciones.js"></script>
  </body>
</html>
