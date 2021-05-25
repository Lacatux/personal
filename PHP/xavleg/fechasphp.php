<?php
//get fechas $_GET
$console.log('a');
$json_Decode($fechaInicioP);
$fechaFinP = $_POST['fecha_fin'];
$json_Decode($fechaFinP);
$fechaInicio = date ('Y-m-d H:i:s', $fechaInicioP);
$fechaFin = date ('Y-m-d H:i:s', $fechaFinP);
$console.log($fechaInicio);
$console.log($fechaFin);
$conn = new mysqli("127.0.0.1", "jaime", "123", "xavleg");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT nombre, descripcion FROM noticia WHERE fecha > ? AND fecha < ?";
$sql = $conn->prepare($sql);
if (!$sql) {
    echo "Fallo al preparar la insert";
}
$bind = $sql->bind_param("dd", $fechaInicio, $fechaFin,);
if (!$bind) {
    echo "Error al asociar parámetros";
}
$result = $sql->execute();

$conn->close();
return $result;
$result = $conn->query($sql);
echo "funx";
/*
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["fecha"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td><img src='images/editar.png' class='img'/></td>";
        echo "<td class='borrar'><a href='bajaNoticia.php?id=" . $row['id_noticia'] . "'><img src='images/borrar.png' class='img'/></td>";
        echo "</tr>";
    }
}*/
