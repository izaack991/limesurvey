<?php
// Agrega el archivo que contiene la conexion a la base de datos 
include 'conexion.php';
// Obtiene el valor de los select con dichos IDs
$semestre = $_GET['semestre'];
$carrera = $_GET['carrera'];

// Esta consulta regresa el grupo Dependiendo de la carrera y el semestre
$sql = "SELECT b.id_grupo, b.nombre
FROM lime_uaim_carrera AS a
INNER JOIN lime_uaim_grupo AS b ON a.id_carrera = b.id_carrera
INNER JOIN lime_uaim_semestre AS c ON b.id_semestre = c.id_semestre
WHERE c.id_semestre = $semestre AND a.id_carrera = $carrera";

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