<?php

function conectarBBDD()
{
  //Abrir una conexión

  $mysqli = new mysqli("127.0.0.1", "ALMI", "Almi123", "grupo_musical");
  if($mysqli->connect_errno)
  {
    echo "Fallo en la conexión: ".$mysqli->connect_errno;
  }

  return $mysqli;

}

function ultimasnoticias()
{
    //Abrir una conexión
    $mysqli = conectarBBDD();

    //Preparar la sentencia
    $sql = "SELECT * FROM ultimasNoticias ORDER BY fecha desc limit 5";
    $sentencia = $mysqli->prepare($sql);
    if(!$sentencia)
    {
      echo "Fallo en la preparación de la sentencia ".$mysqli->errno;
    }

    //Ejecutar la sentencia
    $ejecucion = $sentencia->execute();
    if(!$ejecucion)
    {
      echo "Fallo en la ejecución: ".$mysqli->errno;
    }

    //Recorrer los resultados
    $id = -1;
    $titulo = "";
    $descripcion = "";
    $imagen = "";
    $resumen = "";
    $fecha = "";
    $iduser = -1;
    $vincular = $sentencia->bind_result($id, $titulo, $descripcion, $imagen, $fecha, $resumen, $iduser);
    if(!$vincular)
    {
      echo "Fallo al asociar parametros: ".$mysqli->errno;
    }

    $noticias = array();
    while($sentencia->fetch())
    {
      $noticia = array(
        "id_noticia" => $id,
        "titulo" => $titulo,
        "texto" => $descripcion,
        "imagen" => $imagen,
        "fecha" => $fecha,
        "resumen" => $resumen,
        "id_user" => $iduser
      );
      $noticias[] = $noticia;
    }
    $mysqli->close();
    return $noticias;
}
function noticias()
{
    //Abrir una conexión
    $mysqli = conectarBBDD();

    //Preparar la sentencia
    $sql = "SELECT * FROM ultimasNoticias";
    $sentencia = $mysqli->prepare($sql);
    if(!$sentencia)
    {
      echo "Fallo en la preparación de la sentencia ".$mysqli->errno;
    }

    //Ejecutar la sentencia
    $ejecucion = $sentencia->execute();
    if(!$ejecucion)
    {
      echo "Fallo en la ejecución: ".$mysqli->errno;
    }

    //Recorrer los resultados
    $id = -1;
    $titulo = "";
    $descripcion = "";
    $imagen = "";
    $resumen = "";
    $fecha = "";
    $iduser = -1;
    $vincular = $sentencia->bind_result($id, $titulo, $descripcion, $imagen, $fecha, $resumen, $iduser);
    if(!$vincular)
    {
      echo "Fallo al asociar parametros: ".$mysqli->errno;
    }

    $noticias = array();
    while($sentencia->fetch())
    {
      $noticia = array(
        "id_noticia" => $id,
        "titulo" => $titulo,
        "texto" => $descripcion,
        "imagen" => $imagen,
        "fecha" => $fecha,
        "resumen" => $resumen,
        "id_user" => $iduser
      );
      $noticias[] = $noticia;
    }
    $mysqli->close();
    return $noticias;
}
function noticiasbyid($idnoticia)
{
  $mysqli = conectarBBDD();

      //Preparar la sentencia
      $sql = "SELECT * FROM ultimasNoticias INNER JOIN user ON ultimasNoticias.id_user=user.id_user WHERE id_noticia = ?";
      $sentencia = $mysqli->prepare($sql);
      if(!$sentencia)
      {
        echo "Fallo en la preparación de la sentencia ".$mysqli->errno;
      }

      $asignar = $sentencia->bind_param("i", $idnoticia);
      if(!$asignar)
      {
        echo "Fallo al asignar parámetros: ".$mysqli->errno;
      }

      //Ejecutar la sentencia
      $ejecucion = $sentencia->execute();
      if(!$ejecucion)
      {
        echo "Fallo en la ejecución: ".$mysqli->errno;
      }

      //Recorrer los resultados
      $id = -1;
      $titulo = "";
      $descripcion = "";
      $imagen = "";
      $resumen = "";
      $fecha = "";
      $iduser = -1;
      $iduser = -1;
      $usuario = "";
      $contrasenya = "";
      $email = "";
      $vincular = $sentencia->bind_result($id, $titulo, $descripcion, $imagen, $fecha, $resumen, $iduser, $iduser, $usuario, $contrasenya, $email);

      if(!$vincular)
      {
        echo "Fallo al asociar al vincular: ".$mysqli->errno;
      }
      $noticias = array();
      if($sentencia->fetch())
      {
        $noticias = array(
          "id_noticia" => $id,
          "titulo" => $titulo,
          "texto" => $descripcion,
          "imagen" => $imagen,
          "fecha" => $fecha,
          "resumen" => $resumen,
          "id_user" => $iduser,
          "usuario" => $usuario,
          "contrasenya" => $contrasenya,
          "email" => $email
        );
      }
      $mysqli->close();
      return $noticias;
  }
  function noticiasbyid_tag($idtag)
  {
    $mysqli = conectarBBDD();

        //Preparar la sentencia
        $sql = "SELECT ultimasNoticias.id_noticia, ultimasNoticias.titulo, ultimasNoticias.texto, ultimasNoticias.imagen, DATE_FORMAT(ultimasNoticias.fecha, '%Y-%m-%d'), ultimasNoticias.resumen, ultimasNoticias.id_user, tags_noticias.id_tags_noticias, tags_noticias.id_noticias, tags_noticias.id_tags
        FROM ultimasNoticias
        INNER JOIN tags_noticias ON ultimasNoticias.id_noticia=tags_noticias.id_noticias WHERE tags_noticias.id_tags = ?";
        $sentencia = $mysqli->prepare($sql);
        if(!$sentencia)
        {
          echo "Fallo en la preparación de la sentencia ".$mysqli->errno;
        }

        $asignar = $sentencia->bind_param("i", $idtag);
        if(!$asignar)
        {
          echo "Fallo al asignar parámetros: ".$mysqli->errno;
        }

        //Ejecutar la sentencia
        $ejecucion = $sentencia->execute();
        if(!$ejecucion)
        {
          echo "Fallo en la ejecución: ".$mysqli->errno;
        }

        //Recorrer los resultados
        $id = -1;
        $titulo = "";
        $descripcion = "";
        $imagen = "";
        $resumen = "";
        $fecha = "";
        $iduser = -1;
        $id_tags_noticias = -1;
        $idnoticias = -1;
        $idtag = -1;

        $vincular = $sentencia->bind_result($id, $titulo, $descripcion, $imagen, $fecha, $resumen, $iduser, $id_tags_noticias, $idnoticias, $idtag);

        if(!$vincular)
        {
          echo "Fallo al asociar al vincular: ".$mysqli->errno;
        }
        $noticias = array();
        while($sentencia->fetch())
        {
          $noticia = array(
            "id_noticia" => $id,
            "titulo" => $titulo,
            "texto" => $descripcion,
            "imagen" => $imagen,
            "fecha" => $fecha,
            "resumen" => $resumen,
            "id_user" => $iduser,
            "id_tags_noticias" => $id_tags_noticias,
            "idnoticias" => $idnoticias,
            "id_tag" => $idtag
          );
          $noticias[]=$noticia;
        }
        $mysqli->close();
        return $noticias;
    }

    function noticiasytags($idtag, $fecha)
    {
      $mysqli = conectarBBDD();

          //Preparar la sentencia
          $sql = "SELECT * FROM ultimasNoticias
          INNER JOIN tags_noticias ON ultimasNoticias.id_noticia=tags_noticias.id_noticias
          INNER JOIN tags ON tags.id_tag=tags_noticias.id_tags
          WHERE tags_noticias.id_tags = ? and ultimasNoticias.fecha like ?";
          $sentencia = $mysqli->prepare($sql);
          if(!$sentencia)
          {
            echo "Fallo en la preparación de la sentencia ".$mysqli->errno;
          }

          $asignar = $sentencia->bind_param("is", $idtag, $fecha);
          if(!$asignar)
          {
            echo "Fallo al asignar parámetros: ".$mysqli->errno;
          }

          //Ejecutar la sentencia
          $ejecucion = $sentencia->execute();
          if(!$ejecucion)
          {
            echo "Fallo en la ejecución: ".$mysqli->errno;
          }

          //Recorrer los resultados
          $id = -1;
          $titulo = "";
          $descripcion = "";
          $imagen = "";
          $resumen = "";
          $fecha = "";
          $iduser = -1;
          $id_tags_noticias = -1;
          $idnoticias = -1;
          $idtag = -1;
          $idtag = -1;
          $nombre = "";

          $vincular = $sentencia->bind_result($id, $titulo, $descripcion, $imagen, $fecha, $resumen, $iduser, $id_tags_noticias, $idnoticias, $idtag, $idtag, $nombre);

          if(!$vincular)
          {
            echo "Fallo al asociar al vincular: ".$mysqli->errno;
          }
          $noticias = array();
          while($sentencia->fetch())
          {
            $noticia = array(
              "id_noticia" => $id,
              "titulo" => $titulo,
              "texto" => $descripcion,
              "imagen" => $imagen,
              "fecha" => $fecha,
              "resumen" => $resumen,
              "id_user" => $iduser,
              "id_tags_noticias" => $id_tags_noticias,
              "idnoticias" => $idnoticias,
              "id_tag" => $idtag,
              "id_tag" => $idtag,
              "nombre" => $nombre
            );
            $noticias[]=$noticia;
          }
          $mysqli->close();
          return $noticias;
      }
    function tags()
    {
        //Abrir una conexión
        $mysqli = conectarBBDD();

        //Preparar la sentencia
        $sql = "SELECT * FROM tags";
        $sentencia = $mysqli->prepare($sql);
        if(!$sentencia)
        {
          echo "Fallo en la preparación de la sentencia ".$mysqli->errno;
        }

        //Ejecutar la sentencia
        $ejecucion = $sentencia->execute();
        if(!$ejecucion)
        {
          echo "Fallo en la ejecución: ".$mysqli->errno;
        }

        //Recorrer los resultados
        $id = -1;
        $nombre = "";

        $vincular = $sentencia->bind_result($id, $nombre);
        if(!$vincular)
        {
          echo "Fallo al asociar parametros: ".$mysqli->errno;
        }

        $tags = array();
        while($sentencia->fetch())
        {
          $tag = array(
            "id_tag" => $id,
            "nombre" => $nombre
          );
          $tags[] = $tag;
        }
        $mysqli->close();
        return $tags;
    }
  function modificarnoticia($idnoticia, $titulo, $resumen, $descripcion, $imagen)
    {
      $mysqli = conectarBBDD();

      $sql = "UPDATE ultimasNoticias SET titulo=?,  resumen=?, texto=?, imagen=? WHERE id_noticia=?";
      $sentencia = $mysqli->prepare($sql);
      if(!$sentencia)
      {
        echo "Fallo al preparar la insert";
      }

      $bind = $sentencia->bind_param("ssssi", $titulo, $resumen, $descripcion, $imagen, $idnoticia);
      if(!$bind)
      {
        echo "Error al asociar parámetros";
      }
      $resultado = $sentencia->execute();

      $mysqli->close();
      return $resultado;
    }

    function borrarnoticia($idnoticia)
      {
        $mysqli = conectarBBDD();

        $sql = "DELETE FROM ultimasNoticias WHERE id_noticia=?";
        $sentencia = $mysqli->prepare($sql);
        if(!$sentencia)
        {
          echo "Fallo al preparar la insert";
        }

        $bind = $sentencia->bind_param("i", $idnoticia);
        if(!$bind)
        {
          echo "Error al asociar parámetros";
        }
        $resultado = $sentencia->execute();

        $mysqli->close();
        return $resultado;
      }

      function borrarnoticiatag($idnoticia)
        {
          $mysqli = conectarBBDD();

          $sql = "DELETE FROM tags_noticias WHERE id_noticias=?";
          $sentencia = $mysqli->prepare($sql);
          if(!$sentencia)
          {
            echo "Fallo al preparar la insert";
          }

          $bind = $sentencia->bind_param("i", $idnoticia);
          if(!$bind)
          {
            echo "Error al asociar parámetros";
          }
          $resultado = $sentencia->execute();

          $mysqli->close();
          return $resultado;
        }


function insertarUsuario($user, $password, $email)
  {
    $mysqli = conectarBBDD();

    $sql = "INSERT INTO user( user, password, email) VALUES ( ?, ?, ?)";
    $sentencia = $mysqli->prepare($sql);
    if(!$sentencia)
    {
      echo "Fallo al preparar la insert";
    }

    $bind = $sentencia->bind_param("sss", $user, $password, $email);
    if(!$bind)
    {
      echo "Error al asociar parámetros";
    }
    $resultado = $sentencia->execute();

    $mysqli->close();
    return $resultado;
  }

  function login($user, $password)
    {
      $mysqli = conectarBBDD();
      $sql = "SELECT * FROM user WHERE user = ? AND password = ?";

      $sentencia = $mysqli->prepare($sql);
      if(!$sentencia)
      {
        echo "Fallo al preparar la sentencia";
      }

      $asignar = $sentencia->bind_param("ss", $user, $password);
      if(!$asignar)
      {
        echo "Fallo en la asignación de parámetros";
      }

      $ejecucion = $sentencia->execute();
      if(!$ejecucion)
      {
        echo "Fallo al ejecutar";
      }

      $iduser = -1;
      $usuario = "";
      $contrasenya = "";
      $email = "";
      $vincular = $sentencia->bind_result($iduser, $usuario, $contrasenya, $email);
      if(!$vincular)
      {
        echo "Fallo al vincular";
      }

      $usuarioResultado = array();

      if($sentencia->fetch())
      {
        $usuarioResultado = array(
          'id_user' => $iduser,
          'usuario' => $usuario,
          'contrasenya' => $contrasenya,
          'email' => $email
        );
      }
      $mysqli->close();
      return $usuarioResultado;
    }

    function crearNoticia($titulo, $resumen, $descripcion, $imagen, $iduser)
    {
      $mysqli = conectarBBDD();

    $sql = "INSERT INTO ultimasNoticias (titulo, resumen, texto, imagen, id_user) VALUES (?, ?, ?, ?, ?);";
      $sentencia = $mysqli->prepare($sql);
      if(!$sentencia)
      {
        echo "Fallo al preparar la insert";
      }

      $bind = $sentencia->bind_param("ssssi", $titulo, $resumen, $descripcion, $imagen, $iduser);
      if(!$bind)
      {
        echo "Error al asociar parámetros";
      }
      $resultado = $sentencia->execute();

      $mysqli->close();
      return $resultado;
    }

    function crearmiembro($nombre, $instrumento, $fecha, $ciudad)
    {
      $mysqli = conectarBBDD();

    $sql = "INSERT INTO miembro (nombre, instrumento, fecha_nacimiento, ciudad) VALUES (?, ?, ?, ?);";
      $sentencia = $mysqli->prepare($sql);
      if(!$sentencia)
      {
        echo "Fallo al preparar la insert";
      }

      $bind = $sentencia->bind_param("ssss", $nombre, $instrumento, $fecha, $ciudad);
      if(!$bind)
      {
        echo "Error al asociar parámetros";
      }
      $resultado = $sentencia->execute();

      $mysqli->close();
      return $resultado;
    }
    function miembros()
    {
        //Abrir una conexión
        $mysqli = conectarBBDD();

        //Preparar la sentencia
        $sql = "SELECT * FROM miembro ORDER BY fecha_nacimiento desc";
        $sentencia = $mysqli->prepare($sql);
        if(!$sentencia)
        {
          echo "Fallo en la preparación de la sentencia ".$mysqli->errno;
        }

        //Ejecutar la sentencia
        $ejecucion = $sentencia->execute();
        if(!$ejecucion)
        {
          echo "Fallo en la ejecución: ".$mysqli->errno;
        }

        //Recorrer los resultados
        $idmiembro = -1;
        $nombre = "";
        $instrumento = "";
        $fecha = "";
        $ciudad = "";
        $vincular = $sentencia->bind_result($idmiembro, $nombre, $instrumento, $fecha, $ciudad);
        if(!$vincular)
        {
          echo "Fallo al asociar parametros: ".$mysqli->errno;
        }

        $miembros = array();
        while($sentencia->fetch())
        {
          $miembro = array(
            "id_miembro" => $idmiembro,
            "nombre" => $nombre,
            "instrumento" => $instrumento,
            "fecha" => $fecha,
            "ciudad" => $ciudad
          );
          $miembros[] = $miembro;
        }
        $mysqli->close();
        return $miembros;
    }

    function noticiacontag($idtag, $idnotcia)
    {
      $mysqli = conectarBBDD();

    $sql = "INSERT INTO tags_noticias (id_tags, instrumento) VALUES (?, ?);";
      $sentencia = $mysqli->prepare($sql);
      if(!$sentencia)
      {
        echo "Fallo al preparar la insert";
      }

      $bind = $sentencia->bind_param("ii", $idtag, $idnotcia);
      if(!$bind)
      {
        echo "Error al asociar parámetros";
      }
      $resultado = $sentencia->execute();

      $mysqli->close();
      return $resultado;
    }
    function comprobarUsuario($user)
      {
        $mysqli = conectarBBDD();
        $sql = "SELECT * FROM user WHERE user = ?";

        $sentencia = $mysqli->prepare($sql);
        if(!$sentencia)
        {
          echo "Fallo al preparar la sentencia";
        }

        $asignar = $sentencia->bind_param("s", $user);
        if(!$asignar)
        {
          echo "Fallo en la asignación de parámetros";
        }

        $ejecucion = $sentencia->execute();
        if(!$ejecucion)
        {
          echo "Fallo al ejecutar";
        }

        $iduser = -1;
        $usuario = "";
        $contrasenya = "";
        $email = "";
        $vincular = $sentencia->bind_result($iduser, $usuario, $contrasenya, $email);
        if(!$vincular)
        {
          echo "Fallo al vincular";
        }

        $usuarioResultado = array();

        if($sentencia->fetch())
        {
          $usuarioResultado = array(
            'id_user' => $iduser,
            'usuario' => $usuario,
            'contrasenya' => $contrasenya,
            'email' => $email
          );
        }
        $mysqli->close();
        return $usuarioResultado;
      }
 ?>
