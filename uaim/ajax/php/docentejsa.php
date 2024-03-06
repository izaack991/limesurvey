<?php
// Agrega el archivo que contiene la conexion a la base de datos 
include 'conexion.php';
// Obtiene el valor del select con dicho ID
session_start();
$docentejsa = $_SESSION['cuenta'];
// Regresa el docente dependiendo el docentejsa, esta consulta hace dos validaciones 
//que el docentejsa este en el grupo a cual da clases y si el docentejsa ya a calificado al docente
$sql = "SELECT d.no_empleado, d.nombre, d.apellido
FROM lime_uaim_docente d
WHERE d.id_rol = 4 -- El ID del rol del coordinador --AND d.no_empleado = @no_empleado_maestro -- Verifica que sea el docente actual
AND NOT EXISTS (
    SELECT 1
    FROM lime_uaim_encuesta e
    WHERE e.id_evaluado = d.no_empleado
    AND e.id_evaluador = $docentejsa -- Verifica que el maestro actual ya no haya calificado al coordinador
);";

$result = $conn->query($sql);
// Guarda las filas de la encuesta en un arreglo
$resultados = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $resultados[] = $row;
    }
}
$conn->close();
//regresa los resultados
echo json_encode($resultados);
$_SESSION['tipo_encuesta'] = 4;


?>