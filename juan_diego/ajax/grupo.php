<?php
// Agrega el archivo que contiene la conexion a la base de datos 
include 'conexion.php';
// Obtiene el valor de los select con dichos IDs
$semestre = $_GET['semestre'];
$carrera = $_GET['carrera'];

// Esta consulta regresa el grupo Dependiendo de la carrera y el semestre
$sql = "SELECT b.ID_grupo, b.nombre
FROM lime_UAIM_carrera AS a
INNER JOIN lime_UAIM_Grupo AS b ON a.ID_Carrera = b.ID_Carrera
INNER JOIN lime_UAIM_Semestre AS c ON b.ID_Semestre = c.ID_Semestre
WHERE c.ID_Semestre = $semestre AND a.ID_Carrera = $carrera";

$result = $conn->query($sql);
//guarda las filas de la consulta en un arreglo
$resultados = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $resultados[] = $row;
    }
}
$conn->close();
//regresa los resultados
echo json_encode($resultados);
?>