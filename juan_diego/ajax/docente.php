<?php
// Agrega el archivo que contiene la conexion a la base de datos 
include 'conexion.php';
// Obtiene el valor del select con dicho ID
$alumno = $_GET['alumno'];
// Regresa el docente dependiendo el alumno, esta consulta hace dos validaciones 
//que el alumno este en el grupo a cual da clases y si el alumno ya a calificado al docente
$sql = "SELECT DISTINCT ma.id_maestro as id_maestro, ma.nombre as nombre
FROM lime_uaim_docente as ma
LEFT JOIN lime_uaim_docentemateria as mm ON ma.id_maestro = mm.id_maestro
LEFT JOIN lime_uaim_grupo as gr ON mm.id_grupo = gr.id_grupo
LEFT JOIN lime_uaim_encuesta en ON ma.id_maestro = en.id_maestro
WHERE (en.id_alumno IS NULL OR en.id_alumno <> $alumno )
AND gr.id_grupo = (SELECT id_grupo FROM lime_uaim_Alumno WHERE id_alumno = $alumno);
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