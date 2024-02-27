<?php
// Conexión a la base de datos (asegúrate de tener tus credenciales y detalles de conexión correctos)
include 'conexion.php';
// Consulta para obtener las unidades académicas
$sql = "SELECT ID_UnidadAcademica, nombre FROM lime_UAIM_UnidadAcademica";
$result = $conn->query($sql);

// Crear un array para almacenar las unidades académicas
$unidadesAcademicas = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        $unidadesAcademicas[] = $row;
    }
}

$conn->close();
//devuelve los resultados
header('Content-Type: application/json');
echo json_encode($unidadesAcademicas);
?>
