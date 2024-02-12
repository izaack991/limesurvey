<?php

include 'conexion.php';
$unidadacademica = $_GET['unidadacademica'];
$sql = "SELECT * FROM Carrera WHERE ID_UnidadAcademica = $unidadacademica";
$result = $conn->query($sql);
$resultados = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Agregar cada unidad académica al array
        $resultados[] = $row;
    }
}
echo json_encode($resultados);
?>