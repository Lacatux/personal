<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <title>XAVLEG</title>
    <link rel="stylesheet" type="text/css" href="css/panelNoticias.css">
    <link rel="stylesheet" type="text/css" href="css/comun.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <?php
    session_start();
    if (isset($_SESSION["user"]) == false) {
        header("location: login.php");
    }
    include("datos.php");
    ?>
</head>

<body>

    <div id="encabezado">
        <h1 id="tituloWeb">XAVLEG</h1>
        <a href="index.php"><img id="logo" src="images/logo.png" alt="Logo de la banda" /></a>
        <div id="menu">
            <ul>
                <li class="active">
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a>Gira</a>
                    <ul>
                        <li><a>Gira Completa</a></li>
                        <li><a>Galería</a></li>
                        <li><a>Compra de entradas</a></li>
                    </ul>
                </li>
                <li>
                    <a>Miembros</a>
                </li>
                <li>
                    <a>Discografía</a>
                </li>
                <li>
                    <a class='enlaceMenu' href='createNoticia.php'>Crear Noticia</a>
                </li>
                <li>
                    <a class='enlaceMenuI' href='cerrarSesion.php'>Cerrar sesión</a>
                </li>
            </ul>

        </div>
    </div>

    <div id="cuerpo">

    <h3>Filtro</h3>
        <label for="fecha_in">Fecha Inicio</label>
        <input type="date" id="fecha_in" name="fecha_in">
        <label for="fecha_fin">Fecha Inicio</label>
        <input type="date" id="fecha_fin" name="fecha_fin">
        <input type="button" id="send" value="Enviar" />
    <h3>Noticias</h3>
    <!--
        <h3>Noticias</h3>
        <label for="filtro">Introducir búsqueda</label>
        <input type="text" id="filtro" name="filtro" />
        <table id="tablaNoticias">
            <tr>
                <th>Fecha</th>
                <th>Título</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
            <?php /*
            $conn = new mysqli("127.0.0.1", "jaime", "123", "xavleg");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT id_noticia, nombre, fecha FROM noticia";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["fecha"] . "</td>";
                    echo "<td>" . $row["nombre"] . "</td>";
                    echo "<td><img src='images/editar.png' class='img'/></td>";
                    echo "<td class='borrar'><a href='bajaNoticia.php?id=" . $row['id_noticia'] . "'><img src='images/borrar.png' class='img'/></td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            */?>
        </table>
        -->
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
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/fechas.js"></script>
</body>

</html>