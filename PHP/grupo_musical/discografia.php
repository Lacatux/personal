<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grupo Musical</title>
    <link rel="stylesheet" type="text/css" href="css/discografia.css">
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
          <li>
            <a href="miembros.php">Miembros</a>
          </li>
          <li class="active">
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
      <h3>Discografia</h3>
      <img src="images/discografia2.webp" alt="logo de kiss" class="discografia2">
      <div class="texto">
        <img src="images/discografia1.jpg" alt="logo de kiss" class="discografia1">
        <p>
          La discografía de Kiss, una banda estadounidense de hard rock, heavy metal formada en 1973,
          consiste en 20 álbumes de estudio, seis álbumes en directo, así como numerosos recopilatorios,
          sencillos y vídeos musicales. Si se tienen en cuenta los álbumes en solitario de 1978, Kiss ha
          conseguido treinta discos de oro de la RIAA hacia 2015 y se la considera la banda estadounidense
          con mayor cantidad de estas certificaciones.1​ El conjunto ha vendido más de cien millones de álbumes en
          todo el mundo y veinticinco millones sólo en los Estados Unidos.2​3​ A pesar de no haber alcanzado la primera.
          posición del Billboard 200, ha situado veintiséis de sus trabajos entre los cuarenta primeros puestos.4​ Desde
          su formación, los miembros de Kiss asumieron personalidades acordes con los maquillajes y vestimenta que llevaban,
          así Simmons asumió el rol de «Demon», Stanley el de «Starchild», Criss el de «Catman» y Frehley el de «Space Ace» o «Spaceman».
          Sus tres primeros álbumes de estudio apenas tuvieron repercusión y tuvo que ser con el lanzamiento de Alive!, un disco en directo,
          que la banda consiguiera fama y popularidad.5​ Sus siguientes trabajos, entre los que destacan Destroyer y Love Gun,
          aumentaron la popularidad del grupo y consiguieron varias certificaciones de platino.6​ Después de que cada miembro de
          la banda publicara un álbum en solitario y rodar una película, las tensiones dentro del grupo aumentaron, lo que ç
          ocasionó la marcha de Criss y posteriormente la de Frehley. Tras la salida de dos de sus miembros fundadores —Eric
          Carr y Vinnie Vincent reemplazaron a Criss y Frehley y asumieron las personalidades de «The Fox» y «The Wizard»,
          respectivamente— y publicar algunos álbumes que no tuvieron el número de ventas esperadas, como Music from "The Elder"
          y Creatures of the Night , en 1983, Kiss decidió abandonar el maquillaje y orientar su estilo musical hacia el glam metal.
          En la década de 1990 se produjo la reunión de la formación con sus respectivos maquillajes, aunque con la llegada del nuevo
          milenio, Frehley y Criss volvieron a dejar la banda. Simmons y Stanley decidieron continuar con el batería Eric Singer y el
           Tommy Thayer, quienes asumieron las personalidades de «Catman» y «Spaceman», respectivamente.
       </p>
       <div class="floatClear"></div>
       <h4>Albunes Estudio</h4>
       <div class="Albunesestudio">
         <p>
           La cifra de ventas de un álbum para que alcance los distintos tipos de disco (plata, oro, platino, diamante) difiere
           según en qué país se haya editado. Los organismos certificadores en los Estados Unidos son avalados por la RIAA, que certifica desde
           1958,7​ en Canadá son acreditados por CRIA,8​ que certifica desde 1964.
         </p>
       </div>
       <table>
         <tr>
           <th>Año</th>
           <th>Albunes de estudio</th>
           <th>Lanzamiento</th>
           <th>estrellas</th>
         </tr>
         <tr>
           <td>1974</td>
           <td>Kiss</td>
           <td>18 de febrero</td>
           <td>4,5</td>
         </tr>
         <tr>
           <td>1974</td>
           <td>Hotter Than Hell</td>
           <td> 22 de octubre</td>
           <td>4</td>
         </tr>
         <tr>
           <td>1975</td>
           <td>Dressed to Kill</td>
           <td>19 de marzo</td>
           <td>4,5</td>
         </tr>
         <tr>
           <td>1976</td>
           <td>Destroyer</td>
           <td>15 de marzo</td>
           <td>4,5</td>
         </tr>
         <tr>
           <td>1976</td>
           <td>Rock and Roll Over</td>
           <td>11 de noviembre</td>
           <td>4</td>
         </tr>
         <tr>
           <td>1977</td>
           <td>Love Gun</td>
           <td>30 de junio</td>
           <td>4,5</td>
         </tr>
         <tr>
           <td>1979</td>
           <td>Dynasty</td>
           <td>23 de mayo</td>
           <td>3</td>
         </tr>
         <tr>
           <td>1980</td>
           <td>Unmasked</td>
           <td> 20 de mayo</td>
           <td>2</td>
         </tr>
         <tr>
           <td>1981</td>
           <td>Music from "The Elder"</td>
           <td>6 de noviembre</td>
           <td>2</td>
         </tr>
         <tr>
           <td>1982</td>
           <td>Creatures of the Night</td>
           <td>13 de octubre</td>
           <td>4</td>
         </tr>
       </table>
     </div>
    </div>
    <div id="pie">
      <div id="rrss">
        <span> Disponible en: </span>
        <a href="https://www.youtube.com/channel/UCyOw2FDjfQOFQH7paKxNVvA"><img class="iconossociales" src="images/youtube.png"/></a>
        <a href="https://open.spotify.com/artist/07XSN3sPlIlB2L2XNcTwJw?autoplay=true"><img class="iconossociales"src="images/spotify.png"/></a>
        <a href="https://music.youtube.com/channel/UCL0dlEc0rXV1CIawUKeme4g"><img class="iconossociales"src="images/ytmusic.png"/></a>
        <a href="https://www.deezer.com/es/artist/67/radio?autoplay=true"><img class="iconossociales"src="images/drezzer.png"/></a>
      </div>
    </div>
  </body>
</html>
