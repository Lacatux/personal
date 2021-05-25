<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <title>XAVLEG</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/comun.css">

    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
</head>

<body>

    <div id="encabezado">
        <h1 id="tituloWeb">XAVLEG</h1>
        <a href="index.php"><img id="logo" src="images/logo.png" alt="Logo de la banda" /></a>
        <div id="cuerpo">
            <form action="consultarUsuario.php" method="post">
                <div class="container">
                    <label for="user"><b>Usuario</b></label>
                    <input type="text" placeholder="Introduce usuario" name="user" required>
                    <label for="password"><b>Contraseña</b></label>
                    <input type="password" placeholder="Introduce contraseña" name="password" required>
                    <button type="submit">Entar</button>
                </div>
            </form>

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