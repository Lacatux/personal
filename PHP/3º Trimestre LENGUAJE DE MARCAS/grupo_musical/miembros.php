<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grupo Musical</title>
    <link rel="stylesheet" type="text/css" href="css/miembro.css">
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
          <li class="active">
            <a href="miembros.php">Miembros</a>
          </li>
          <li>
            <a href="discografia.php">Discografia</a>
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
        }
          ?>
        </ul>
      </div>
    </div>

    <div id="cuerpo">
      <div class="miembro1">
        <img src="images/miembro1.jpg" alt="Paul Stanley" class="img">
        <h2>Paul Stanley</h2>
        <div class="texto">
          <p>
            Stanley Bert Eisen (Queens, Nueva York, 20 de enero de 1952), más conocido como
            Paul Stanley, es un músico estadounidense, reconocido por ser la voz principal, guitarra rítmica y
            fundador junto a Gene Simmons de la banda de rock Kiss. Ha participado en la composición de la mayoría de
            los éxitos de la banda y, junto a Simmons, ha liderado a la agrupación durante sus casi cincuenta años de trayectoria.
            1​ Su personaje representado en Kiss es The Starchild o El Chico Estrella.2​
            La revista Hit Parader lo clasificó como unos de los 100 mejores vocalistas del metal de todos los tiempos,
            ubicándolo en el puesto número 18.3​ En 2014 fue presentado en el Salón de la Fama del Rock and Roll como uno de los miembros
            fundadores de Kiss.4​5​
          </p>
        </div>
      </div>
      <div class="miembro2">
        <img src="images/miembro2.jpg" alt="Gene Simmons" class="img">
        <h2>Gene Simmons</h2>
        <div class="texto">
          <p>
            Chaim Witz (hebreo: חיים ויץ, n. Haifa, Israel; 25 de agosto de 1949), conocido como Gene Simmons, es un músico israelí-estadounidense,
            cantante, compositor, productor de discos, emprendedor, actor, autor y personalidad televisiva de ascendencia judía húngara.
             También conocido por su personaje teatral, The Demon, es el bajista y colíder de Kiss, la banda de rock que co-fundó con el
             cantante y guitarrista rítmico Paul Stanley a principios de los 70s.
             Simmons nació como Chaim Witz el 25 de agosto de 1949, en el Hospital Rambam, en Haifa, Israel, de padres emigrantes judíos
             de Hungría. Su madre, Florence Klein (originalmente Flóra Kovács), nació en la región Jand de Hungría, y sobrevivió a los
             campos de concentración nazis.1​ Su madre y su hermano, Larry Klein, fueron los únicos miembros de su familia que sobrevivieron
             al Holocausto. Su madre falleció en diciembre del 2018.2​
          </p>
        </div>
      </div>
        <div class="miembro3">
          <img src="images/miembro3.jpeg" alt="Eric Singer" class="img">
          <h2>Eric Singer</h2>
          <div class="texto">
            <p>
              Eric Doyle Mensinger, más conocido como Eric Singer (Cleveland, Ohio, Estados Unidos, 12 de mayo de 1958), es un baterista,
              principalmente conocido por su trabajo en el grupo Kiss. Ha formado parte de diferentes bandas reconocidas, entre ellas Lita
              Ford, Black Sabbath, Brian May (como sustituto de Cozy Powell), Alice Cooper, Kiss y Avantasia; de estas tres últimas agrupaciones,
               Eric forma parte activa en la actualidad.
               Uno de sus más importantes desafíos como baterista fue el legado que se le permite continuar en Kiss, banda legendaria de
               Norteamérica fundada en 1973, la cual había contado con dos bateristas extraordinarios, Peter Criss, quien para 1980 debe
               dejar la agrupación para comenzar una carrera en solitario. El reemplazo inmediato es Eric Carr (Paul Charles Caravello),
               hijo de inmigrantes Italianos nacido el 12 de julio de 1950 en Nueva York. Eric Carr es considerado por muchos de los fanes
               de Kiss como el más carismático baterista de todos los tiempos de la banda, (debido a su maquillaje parecido a las manchas
               de un zorro); logra ganar la atención de los fanes y sustituir la imagen "The Catman" de Peter Criss. Por su parte, Eric
               Singer es considerado como el más técnico y hábil baterista de la banda; logrando imprimir mayor limpieza en las canciones
               y sobre todo, en los tempranos noventas; un toque más "heavy" a la música de la banda.
            </p>
          </div>
        </div>
        <div class="miembro4">
          <img src="images/miembro4.jpg" alt="Tommy Thayer" class="img">
          <h2>Tommy Thayer</h2>
          <div class="texto">
            <p>
              Thomas Cunningham Thayer, más conocido como Tommy Thayer (7 de noviembre de 1960),
              es el guitarrista actual del grupo musical Kiss y sustituto de Ace Frehley en la banda al igual que
              Eric Singer sustituye a Peter Criss como baterista.
              Tommy Thayer nació en Portland; Oregón. Empezó a tocar la guitarra a la edad de 13 años, e inmediatamente
              supo en ese momento que él había sido designado para ser un músico de rock.
              Su pasión por el rock de los años 1970 lo llevó a integrar varias bandas de garaje que en el futuro finalmente
              desembocaría en Black N' Blue; con esa banda finalmente consiguió un contrato para Geffen Records. Tommy co-escribió
              la mayoría de las canciones en Black 'N Blue, banda que alcanzó el millón de discos vendidos en todo el mundo. Mientras
              tocaba en Black 'N Blue su camino se cruzó con Kiss.
            </p>
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
