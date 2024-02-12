<?php

include 'conexion.php';

$semestre = $_GET['semestre'];
$carrera = $_GET['carrera'];


$sql = "SELECT b.ID_grupo, b.nombre
FROM carrera AS a
INNER JOIN grupo AS b ON a.ID_Carrera = b.ID_Carrera
INNER JOIN semestre AS c ON b.ID_Semestre = c.ID_Semestre
WHERE c.ID_Semestre = $semestre AND a.ID_Carrera = $carrera";

$result = $conn->query($sql);
$resultados = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $resultados[] = $row;
    }
}
echo json_encode($resultados);
?>