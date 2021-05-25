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
        <div id="menu">
            <ul>
                <li class="active">
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="gira.html">Gira</a>
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
                <?php
                if (isset($_SESSION["user"]) == false) {
                    echo "<li><a class='enlaceMenu' href='registro.php'>Registro</a></li>";
                    echo "<li><a class='enlaceMenu' href='login.php'>Login</a></li>";
                } else {
                    echo "<li><a class='enlaceMenu' href='createNoticia.php'>Crear Noticia</a></li>";
                    echo "<li><a class='enlaceMenu' href='panelNoticia.php'>Panel Noticias</a></li>";
                    echo "<li><a class='enlaceMenu' href='cerrarSesion.php'>Cerrar sesión</a></li>";
                }
                ?>
            </ul>

        </div>
    </div>

    <div id="cuerpo">
        <label for="num">Número de noticias a mostrar</label>
        <input type="text" id="num" name="num" placeholder="Escriba el número (0-5)"/>
        <label id="asc">Ascendente</label>
        <label id="desc">Descendente</label>
        <input type="checkbox" id="orden" name="orden"/>
        <button id="enviar">Enviar</button>
        <br>
        <br>
        <br>
        <br>
                <table name="noticias" id="noticias">

                </table>
        <br>
        <br>
        <br>
        <br>

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
    <script src="js/recu.js"></script>
</body>

</html>