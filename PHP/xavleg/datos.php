<?php
function conectarBBDD()
{
  //Abrir una conexión

  $mysqli = new mysqli("127.0.0.1", "root", "", "xavleg");
  if ($mysqli->connect_errno) {
    echo "Fallo en la conexión: " . $mysqli->connect_errno;
  }

  return $mysqli;
}

function login($user, $password)
{
  $mysqli = conectarBBDD();
  $sql = "SELECT * FROM users WHERE user = ? AND password = ?";

  $sentencia = $mysqli->prepare($sql);
  if (!$sentencia) {
    echo "Fallo al preparar la sentencia";
  }

  $asignar = $sentencia->bind_param("ss", $user, $password);
  if (!$asignar) {
    echo "Fallo en la asignación de parámetros";
  }

  $ejecucion = $sentencia->execute();
  if (!$ejecucion) {
    echo "Fallo al ejecutar";
  }

  $id = -1;
  $usuario = "";
  $password = "";
  $nombre = "";
  $vincular = $sentencia->bind_result($id, $usuario, $password, $nombre);
  if (!$vincular) {
    echo "Fallo al vincular";
  }

  $usuarioResultado = array();

  if ($sentencia->fetch()) {
    $usuarioResultado = array(
      'id_user' => $id,
      'user' => $usuario,
      'password' => $password,
      'nombre' => $nombre
    );
  }

  $mysqli->close();
  return $usuarioResultado;
}

function insertarNoticia($nombre, $texto, $resumen, $imagen)
{
  $mysqli = conectarBBDD();
  $sql = "INSERT INTO noticia( nombre, texto, resumen, imagen) VALUES (?, ?, ?, ?)";
  $sentencia = $mysqli->prepare($sql);
  if (!$sentencia) {
    echo "Fallo al preparar la insert";
  }
  $bind = $sentencia->bind_param("ssss", $nombre, $texto, $resumen, $imagen);
  if (!$bind) {
    echo "Error al asociar parámetros";
  }
  $resultado = $sentencia->execute();

  $mysqli->close();
  return $resultado;
}

function insertarUsuario($user, $password, $nombre)
{
  $mysqli = conectarBBDD();

  $sql = "INSERT INTO user( user, password, nombre) VALUES ( ?, ?, ? )";
  $sentencia = $mysqli->prepare($sql);
  if (!$sentencia) {
    echo "Fallo al preparar la insert";
  }

  $bind = $sentencia->bind_param("sss", $user, $password, $nombre);
  if (!$bind) {
    echo "Error al asociar parámetros";
  }
  $resultado = $sentencia->execute();

  $mysqli->close();
  return $resultado;
}

function borrarNoticia($id)
{
  $mysqli = conectarBBDD();
  $sql = "DELETE FROM noticia WHERE id_noticia = ?";
  $sentencia = $mysqli->prepare($sql);
  if (!$sentencia) {
    echo "Fallo al preparar la insert";
  }
  $bind = $sentencia->bind_param("i", $id);
  if (!$bind) {
    echo "Error al asociar parámetros";
  }
  $resultado = $sentencia->execute();

  $mysqli->close();
  return $resultado;
}

function modificarNoticia($nombre, $texto, $resumen, $imagen, $id)
{
  $mysqli = conectarBBDD();
  $sql = "UPDATE noticia SET nombre = ?, texto = ?, resumen = ?, imagen = ? WHERE id_noticia = ?";
  $sentencia = $mysqli->prepare($sql);
  if (!$sentencia) {
    echo "Fallo al preparar la insert";
  }
  $bind = $sentencia->bind_param("ssssi", $nombre, $texto, $resumen, $imagen, $id);
  if (!$bind) {
    echo "Error al asociar parámetros";
  }
  $resultado = $sentencia->execute();

  $mysqli->close();
  return $resultado;
}

function insertarDisco($nombre, $fecha, $num_canciones)
{
  $mysqli = conectarBBDD();
  $sql = "INSERT INTO disco(nombre, fecha_lanzamiento, num_canciones) VALUES (?, ?, ?) ORDER BY fecha_lanzamiento ASC";
  $sentencia = $mysqli->prepare($sql);
  if (!$sentencia) {
    echo "Fallo al preparar la insert";
  }
  $bind = $sentencia->bind_param("ssi", $nombre, $fecha, $num_canciones);
  if (!$bind) {
    echo "Error al asociar parámetros";
  }
  $resultado = $sentencia->execute();

  $mysqli->close();
  return $resultado;
}

function getDiscos()
{

  //Abrir una conexión
  $mysqli = conectarBBDD();

  //Preparar la sentencia
  $sql = "SELECT * FROM disco";
  $sentencia = $mysqli->prepare($sql);
  if (!$sentencia) {
    echo "Fallo en la preparación de la sentencia " . $mysqli->errno;
  }
  //Ejecutar la sentencia
  $ejecucion = $sentencia->execute();
  if (!$ejecucion) {
    echo "Fallo en la ejecución: " . $mysqli->errno;
  }
  //Recorrer los resultados
  $id_disco = -1;
  $nombre = "";
  $fecha_lanzamiento = "";
  $num_canciones = 0;
  $vincular = $sentencia->bind_result($id_disco, $nombre, $fecha_lanzamiento, $num_canciones);
  if (!$vincular) {
    echo "Fallo al asociar parametros: " . $mysqli->errno;
  }
  $discos = array();
  while ($sentencia->fetch()) {
    $disco = array(
      "id_disco" => $id_disco,
      "nombre" => $nombre,
      "fecha_lanzamiento" => $fecha_lanzamiento,
      "num_canciones" => $num_canciones
    );
    $discos[] = $disco;
  }
  $mysqli->close();
  return $discos;
}

function noticiasByFecha($orden, $numero)
{
  $mysqli = conectarBBDD();
  if ($orden == 0) {
    $sql = "SELECT nombre, fecha, texto FROM noticia ORDER BY fecha DESC LIMIT ?";
  } else if ($orden == 1) {
    $sql = "SELECT nombre, fecha, texto FROM noticia ORDER BY fecha LIMIT ?";
  }
  $sentencia = $mysqli->prepare($sql);
  if (!$sentencia) {
    echo "Fallo al preparar la insert";
  }
  $bind = $sentencia->bind_param("i", $numero);
  if (!$bind) {
    echo "Error al asociar parámetros";
  }
  $ejecucion = $sentencia->execute();
  if (!$ejecucion) {
    echo "Fallo al ejecutar";
  }
  $orden = $orden + 0;
  $nombre = "";
  $texto = "";
  $fecha= "";
  $vincular = $sentencia->bind_result($nombre, $texto, $fecha);
  if (!$vincular) {
    echo "Fallo al asociar parametros: " . $mysqli->errno;
  }
  $noticias = array();
  while ($sentencia->fetch()) {
    $noticia = array(
      "titulo" => $nombre,
      "texto" => $texto,
      "fecha" => $fecha
    );
    $noticias[] = $noticia;
  }
  $mysqli->close();
  return $noticias;
}
