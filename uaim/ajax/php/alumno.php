<?php
// Agrega el archi que contiene la conexion a la base de datos 
include 'conexion.php';
// Agrega a una variable el valor del Select con dicho ID
$grupo = $_GET['grupo'];

// Filtra el alumno dependiendo del grupo
$sql = "SELECT matricula, nombre from lime_uaim_alumno where id_grupo = $grupo";

$result = $conn->query($sql);
// Agrega las filas de la consulta en un arreglo
$resultados = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $resultados[] = $row;
    }
}
$conn->close();
//devuelve los resultados
echo json_encode($resultados);
?>