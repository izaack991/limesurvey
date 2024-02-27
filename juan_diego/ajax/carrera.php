<?php
// Agrega el archivo que contiene la conexion a la base de datos 
include 'conexion.php';
// Obtiene el valor del select con dicho ID
$unidadacademica = $_GET['unidadacademica'];
// Filtra la carrera dependiendo de la unidad academica
$sql = "SELECT * FROM lime_UAIM_Carrera WHERE ID_UnidadAcademica = $unidadacademica";
$result = $conn->query($sql);
$resultados = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Agregar cada unidad académica al array
        $resultados[] = $row;
    }
}
$conn->close();
//devuelve los resultados
echo json_encode($resultados);
?>