<?php
// Agrega el archivo que contiene la conexion a la base de datos 
include 'conexion.php';
// Obtiene el valor del select con dicho ID
session_start();
$alumno = $_SESSION['matricula'];
// Regresa el docente dependiendo el alumno, esta consulta hace dos validaciones 
//que el alumno este en el grupo a cual da clases y si el alumno ya a calificado al docente
$sql = "SELECT DISTINCT ma.no_empleado as no_empleado, ma.nombre as nombre
FROM lime_uaim_empleado as ma
LEFT JOIN lime_uaim_docentemateria as mm ON ma.no_empleado = mm.no_empleado
LEFT JOIN lime_uaim_grupo as gr ON mm.id_grupo = gr.id_grupo
LEFT JOIN lime_uaim_encuesta en ON ma.no_empleado = en.id_evaluado
WHERE (en.id_evaluador IS NULL OR en.id_evaluador <> $alumno )
AND gr.id_grupo = (SELECT id_grupo FROM lime_uaim_alumno WHERE matricula = $alumno);
";

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

?>