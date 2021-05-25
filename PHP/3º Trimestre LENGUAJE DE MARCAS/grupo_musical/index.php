<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grupo Musical</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/comun.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <?php
  session_start();
  include("datos.php");
  ?>
  </head>
  <body>
    <div id="encabezado">
      <img src="images/portada.jpg" alt="portada Kiss" class="portada"/>
      <div id="menu">
        <ul>
          <li class="active">
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
            <a href="seleccion.php">Filtro</a>
          </li>
          <li>
            <a href="noticias.php">Noticias </a>
          </li>
          <?php
        if (isset( $_SESSION["user"] ) == false){
          echo "<li>";
            echo"<a href='registro.php'>Registar</a>";
          echo "</li>";
          echo"<li>";
            echo"<a href='login.php'>Inicio sesion</a>";
          echo"</li>";
        }
        else {
          echo "<li>";
            echo"<a href='cerrarSesion.php'>Cerrar Sesion</a>";
          echo "</li>";
          echo"<li>";
            echo"<a href='createnews.php'>Crear Noticia</a>";
          echo"</li>";
          echo"<li>";
            echo"<a href='createmiembros.php'>Crear Miembros</a>";
          echo"</li>";
        }
          ?>
        </ul>
      </div>
    </div>
    <div id="cuerpo">
      <style media="screen">
      #cuerpo{
      height: 1800px;
      }
      </style>
      <div id="ultimasnoticias">
        <h2>Ultimas noticias</h2>
        <img src="images/galeria6.png" alt="Kiss" class="img1"/>
        <?php
        /*<div class="noticia1">
          <h3>GENE SIMMONS PIDE 22 MILLONES DE DÓLARES POR SU MANSIÓN DE CALIFORNIA.</h3>
          <img class="imgno1" src="images/noticia1.jpg" alt="Mansion de Simmons"/>
          <p>
            El bajista y cantante de KISS, Gene Simmons y su esposa Shannon Tweed Simmons, han puesto a la venta su casa
            de la zona de Benedict Canyon en Los Angeles, CA por 22 millones de dólares después de casi cuatro décadas,
            informa Katherine Clarke de The Wall Street Journal.
            Gene y Shannon se trasladarán a una finca de 24 acres en Washington, cerca de Mount Rainier que el bajista posee.
            Hablando con The Wall Street Journal sobre la razón que hay detrás de esta mudanza, Gene dijo que “California y
            Beverly Hills han estado tratando a la gente que crea trabajos muy mal y los niveles de impuestos son inaceptables.
            Yo trabajo duro y pago mis impuestos y no quiero llorar el blues de Beverly Hills, pero ya está bien”. A diferencia de California,
            Washington no tiene impuesto estatal sobre los ingresos.
          </p>
          <div class="floatClear"></div>
        </div>*/
        ?>
        <div class="noticia2">
          <?php
          /*<h3>ACE FREHLEY: «MI PRIMER DISCO EN SOLITARIO ME ENSEÑÓ QUE ERA MÁS CREATIVO DE LO QUE PENSABA».</h3>
          <img class="imgno2" src="images/noticia2.jpg" alt="Ace Frehley"/>
          <p>
            Ace Frehley está promocionando un disco de versiones, el segundo, mientras alaba la creatividad que
            tuvo en su primer disco en solitario. Si bien es cierto que su trabajo, tras el de Paul Stanley, fue
            uno de los más destacados, a nadie se le escapa que su música sonaba a Sweet por los cuatro costados
            y que tampoco es que descubriera la gasolina. De hecho, fue el único que impuso tocar uno de los temas
            de ese disco en los conciertos.
            Ahora declara que «creo que mi mayor éxito fue «New York Groove», una sorpresa para los fans de Kiss que
            se sorprendieron de que mi disco fuera el mejor de los cuatro. No era el cantante principal o el frontman
            de la banda, la gente pensó que los discos de Gene o de Paul serían los mejores, pero mi disco fue superior
            al de ellos en ventas y en popularidad».
          </p>
          <div class="floatClear"></div>
        </div>*/
        ?>
        <?php
        $noticias = ultimasnoticias();
       for ($i = 0; $i < sizeof($noticias); $i++) { ?>
         <?php
         echo "<a href='detalles.php?id_noticia=".$noticias[$i]['id_noticia']."'><h3>".$noticias[$i]['titulo']."</h3></a>";
         ?>
          <img class="imgno2" src="<?= $noticias[$i]['imagen'] ?>"/>
          <p>
            <?= $noticias[$i]['resumen'] ?>
          </p>
          <?php if (isset( $_SESSION["user"] ) == true){
            echo "<a href= 'update.php?id_noticia=".$noticias[$i]['id_noticia']."'>Actualizar </a>";
            //echo "<a href= 'delete.php?id_noticia=".$noticias[$i]['id_noticia']."'> Eliminar</a>";
          }
          ?>
          <br>
          <br>
          <br>
        <?php } ?>

      </div>
        </div>

        <div id="Miembros">
          <?php
          $miembros = miembros();
         for ($i = 0; $i < sizeof($miembros); $i++) { ?>
           <?php
           echo "<h3>".$miembros[$i]['nombre']."</h3>";
           ?>
            <p>
              <?= $miembros[$i]['instrumento'] ?>
              <?= $miembros[$i]['ciudad'] ?>
            </p>
            <br>
            <br>
            <br>
          <?php } ?>
        </div>
      <div id="proximafechagira">
        <h2>Fechas Gira</h2>
        <div id="fecha">
          <p>
            Poximas fechas de gira, esta previsto que el grupo Kiss actue en America y Europa
         </p>
            <table>
              <tr>
                <th>Fecha</th>
                <th>Pais</th>
                <th>lugar</th>
              </tr>
              <tr>
                <td>04 julio 2025 - 18 agosto 2025</td>
                <td>España</td>
                <td>Madrid-Barcelona-Sevilla</td>
              </tr>
              <tr>
                <td>28 noviembre 2027 - 13 diciembre 2027</td>
                <td>Peru</td>
                <td>Lima - costa verde</td>
              </tr>
              <tr>
                <td> 13 diciembre 2028 - 7 enero 2029</td>
                <td>Costa Rica</td>
                <td>San Jose - estadio nacional de Costa Rica</td>
              </tr>
            </table>
        </div>
      </div>
      <div id="mercado">
        <h2>Merchandising</h2>
        <div id=camiseta>
        <div class="camiseta1">
          <h3>Kiss Gradient Logo T-Shirt Official Licensed</h3>
          <img class="camiseta" src="images/camiseta1.jpg" alt="camiseta kiss"/>
          -100% Officially Licensed Merchandise - 100% original <br>
          -Hombre/Unisex <br>
          -100% Algodón <br>
          -avar a 40°, no se puede lavar en seco <br>
          -Ajuste normal <br>
           -Regular fit <br>
          Precio: <span>13.95€</span>
          <a href="https://www.amazon.es/I-D-C-Kiss-Vintage-Camiseta-Hombre-Negro/dp/B01E6F8IIA/ref=sr_1_6?dchild=1&keywords=CAMISETA+KISS+LOGO+L&qid=1603954085&sr=8-6">Comprar</a>
        <div class="floatClear"></div>
        </div>
      <div class="camiseta2">
          <h3>Plastic Head Kiss Neon Band</h3>
          <img class="camiseta" src="images/camiseta2.jpg" alt="camiseta kiss"/>
          -100% Algodón <br>
          -Lavar a maquina - en caliente (superior a 30 °)<br>
          -Estilo del cuello: cuello congregado<br>
          -Manga corta<br>
          Precio: <span>19,99€</span>
          <a href="https://www.amazon.es/Plastic-Head-Camiseta-Hombre-Negro/dp/B00YQJW9AK/ref=sr_1_5?adgrpid=56496498379&dchild=1&gclid=Cj0KCQjwreT8BRDTARIsAJLI0KJetkYXT_HB3McoziAg3yZDLtyV1bvo-cqqeksqCC-msw67dm-XKEIaAgYjEALw_wcB&hvadid=275300559567&hvdev=c&hvlocphy=20271&hvnetw=g&hvqmt=e&hvrand=10424968646710587407&hvtargid=kwd-323783455136&hydadcr=14139_1813766&keywords=camisetas+de+kiss&qid=1603888325&sr=8-5&tag=hydes-21">Comprar</a>
        <div class="floatClear"></div>
      </div>
    </div>
    <div id=sudadera>
    <div class="sudadera1">
      <h3>Sudadera con Capucha Kiss - Classic Gradient Logo</h3>
      <img class="camiseta" src="images/sudadera1.jpg" alt="sudadera kiss"/>
      -Producto 100% con licencia oficial <br>
      -Con cuello y línea de copyright impresos como certificado de autenticidad <br>
      -Algodón<br>
      -80% algodón, 20% poliéster<br>
      -Lavable en la lavadora<br>
      -Ajuste clásico<br>
      Precio: <span>25,00€</span>
      <a href="https://www.amazon.es/Sudadera-Capucha-Kiss-Gradient-Official/dp/B08KFJDNNC/ref=sr_1_1_sspa?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=kiss+sudadera&qid=1603954233&sr=8-1-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEySThIUk9aT0s4SjdPJmVuY3J5cHRlZElkPUEwMDA0ODQ0M0c3UUROVTMzNjkzMiZlbmNyeXB0ZWRBZElkPUEwODkwNDMyMzdCTjIySjhLMVlYQSZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=">Comprar</a>
    <div class="floatClear"></div>
    </div>
    <div class="sudadera2">
      <h3>KISS - Sudadera con Capucha </h3>
      <img class="camiseta" src="images/sudadera2.jpg" alt="sudadera kiss"/>
      -Officially Licensed <br>
      -Printed here in the USA <br>
      -75% Algodón, 25% Poliéster<br>
      -Manga larga<br>
      Precio: <span>45,00€</span>
      <a href="https://www.amazon.es/Kiss-Sudadera-capucha-Hombre-X-Large/dp/B00NB65258/ref=sr_1_12?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=kiss+sudadera&qid=1603954705&sr=8-12">Comprar</a>
    <div class="floatClear"></div>
  </div>
</div>
  </div>
  </div>
    <div id="pie">
      <div id="rrss">
        <span>Disponible en:</span>
        <a href="https://www.youtube.com/channel/UCyOw2FDjfQOFQH7paKxNVvA"><img class="iconossociales" src="images/youtube.png"/></a>
        <a href="https://open.spotify.com/artist/07XSN3sPlIlB2L2XNcTwJw?autoplay=true"><img class="iconossociales"src="images/spotify.png"/></a>
        <a href="https://music.youtube.com/channel/UCL0dlEc0rXV1CIawUKeme4g"><img class="iconossociales"src="images/ytmusic.png"/></a>
        <a href="https://www.deezer.com/es/artist/67/radio?autoplay=true"><img class="iconossociales"src="images/drezzer.png"/></a>
      </div>
    </div>
  </body>
</html>
