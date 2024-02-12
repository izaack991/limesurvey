<?php

include 'conexion.php';

$grupo = $_GET['grupo'];


$sql = "select ID_alumno, nombre from Alumno where ID_grupo = $grupo";

$result = $conn->query($sql);
$resultados = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $resultados[] = $row;
    }
}
echo json_encode($resultados);
?>