<?php
// Agrega el archivo que contiene la conexion a la base de datos 
include 'conexion.php';
session_start();
$docentec = $_SESSION['cuenta'];
// Regresa el docente dependiendo el alumno, esta consulta hace dos validaciones 
//que el alumno este en el grupo a cual da clases y si el alumno ya a calificado al docente
$sql = "SELECT d.no_empleado, d.nombre, d.apellido
FROM lime_uaim_empleado d
WHERE d.es_docente = '1' AND d.no_empleado != $docentec -- El ID del rol del coordinador
AND NOT EXISTS (
    SELECT 1
    FROM lime_uaim_encuesta e
    WHERE e.id_evaluado = d.no_empleado
    AND e.id_evaluador = $docentec 
    AND e.id_encuesta = 3 -- Verifica que el maestro actual ya no haya calificado al coordinador
);";

$result = $conn->query($sql);
// Guarda las filas de la encuesta en un arreglo
$resultados = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $resultados[] = $row;
    }
}
else{echo $resultados;}
$conn->close();
//regresa los resultados
echo json_encode($resultados);
//$_SESSION['tipo_encuesta'] = 3;

?>