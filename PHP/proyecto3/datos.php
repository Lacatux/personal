<?php
    function conectarBBDD()
    {
      //Abrir una conexión

      $mysqli = new mysqli("127.0.0.1", "jaime", "123", "juegalmi");
      if($mysqli->connect_errno)
      {
        echo "Fallo en la conexión: ".$mysqli->connect_errno;
      }

      return $mysqli;

    }

    function juegosCategoria($idCategoria)
    {
        //Abrir una conexión
        $mysqli = conectarBBDD();

        //Preparar la sentencia
        $sql = "SELECT * FROM Juego WHERE id_categoria = ?";
        $sentencia = $mysqli->prepare($sql);
        if(!$sentencia)
        {
          echo "Fallo en la preparación de la sentencia ".$mysqli->errno;
        }

        $asignar = $sentencia->bind_param("i", $idCategoria);
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
        $precio = 0;
        $idCategoria = -1;
        $vincular = $sentencia->bind_result($id, $titulo, $descripcion, $imagen, $precio, $idCategoria);
        if(!$vincular)
        {
          echo "Fallo al asociar parametros: ".$mysqli->errno;
        }
        $juegosRPG = array();
        while($sentencia->fetch())
        {
          $juego = array(
            "id_juego" => $id,
            "titulo" => $titulo,
            "texto" => $descripcion,
            "imagen" => $imagen,
            "precio" => $precio,
            "enlace" => "https://es.wikipedia.org/wiki/Dark_Souls"
          );
          $juegosRPG[] = $juego;
        }
        $mysqli->close();
        return $juegosRPG;
    }

    function juegosById($idJuego)
    {
        //Abrir una conexión
        $mysqli = conectarBBDD();

        //Preparar la sentencia
        $sql = "SELECT * FROM Juego WHERE id_juego = ?";
        $sentencia = $mysqli->prepare($sql);
        if(!$sentencia)
        {
          echo "Fallo en la preparación de la sentencia ".$mysqli->errno;
        }

        $asignar = $sentencia->bind_param("i", $idJuego);
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
        $precio = 0;
        $idCategoria = -1;
        $vincular = $sentencia->bind_result($id, $titulo, $descripcion, $imagen, $precio, $idCategoria);

        if(!$vincular)
        {
          echo "Fallo al asociar parametros: ".$mysqli->errno;
        }
        $juego = array();
        if($sentencia->fetch())
        {
          $juego = array(
            "id_juego" => $id,
            "titulo" => $titulo,
            "texto" => $descripcion,
            "imagen" => $imagen,
            "precio" => $precio,
            "enlace" => "https://es.wikipedia.org/wiki/Dark_Souls",
            "idCategoria" => $idCategoria
          );
        }
        $mysqli->close();
        return $juego;
    }

    function getCategorias()
    {
        //Abrir una conexión
        $mysqli = conectarBBDD();

        //Preparar la sentencia
        $sql = "SELECT * FROM Categoria";
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
        $id_categoria = -1;
        $nombre = "";

        $vincular = $sentencia->bind_result($id_categoria, $nombre);
        if(!$vincular)
        {
          echo "Fallo al asociar parametros: ".$mysqli->errno;
        }
        $categorias = array();
        while($sentencia->fetch())
        {
          $categoria = array(
            "id_categoria" => $id_categoria,
            "nombre" => $nombre,
          );
          $categorias[] = $categoria;
        }
        $mysqli->close();
        return $categorias;
    }

    function insertarUsuario($user, $password, $nombre)
    {
      $mysqli = conectarBBDD();

      $sql = "INSERT INTO user( user, password, nombre) VALUES ( ?, ?, ? )";
      $sentencia = $mysqli->prepare($sql);
      if(!$sentencia)
      {
        echo "Fallo al preparar la insert";
      }

      $bind = $sentencia->bind_param("sss", $user, $password, $nombre);
      if(!$bind)
      {
        echo "Error al asociar parámetros";
      }
      $resultado = $sentencia->execute();

      $mysqli->close();
      return $resultado;
    }

    function insertarJuego($titulo, $descripcion, $imagen, $precio, $categoria)
    {
      $mysqli = conectarBBDD();

      $sql = "INSERT INTO Juego( titulo, descripcion, imagen, precio, id_categoria) VALUES ( ?, ?, ?, ?, ? )";
      $sentencia = $mysqli->prepare($sql);
      if(!$sentencia)
      {
        echo "Fallo al preparar la insert";
      }

      $bind = $sentencia->bind_param("sssdi", $titulo, $descripcion, $imagen, $precio, $categoria);
      if(!$bind)
      {
        echo "Error al asociar parámetros";
      }
      $resultado = $sentencia->execute();

      $mysqli->close();
      return $resultado;
    }

    function modificarJuego($id_juego, $titulo, $descripcion, $imagen, $precio, $categoria)
    {
      $mysqli = conectarBBDD();

      $sql = "UPDATE Juego SET titulo=?, descripcion=?, imagen=?, precio=?, id_categoria=? WHERE id_juego=?";
      $sentencia = $mysqli->prepare($sql);
      if(!$sentencia)
      {
        echo "Fallo al preparar la insert";
      }

      $bind = $sentencia->bind_param("sssdii", $titulo, $descripcion, $imagen, $precio, $categoria, $id_juego);
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

      $id = -1;
      $usuario = "";
      $contrasenya = "";
      $nombre = "";
      $vincular = $sentencia->bind_result($id, $usuario, $contrasenya, $nombre);
      if(!$vincular)
      {
        echo "Fallo al vincular";
      }

      $usuarioResultado = array();

      if($sentencia->fetch())
      {
        $usuarioResultado = array(
          'id' => $id,
          'usuario' => $usuario,
          'contrasenya' => $contrasenya,
          'nombre' => $nombre
        );
      }

      $mysqli->close();
      return $usuarioResultado;
    }
?>
