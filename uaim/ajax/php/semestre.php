<?php
// Agrega el archivo que contiene la conexion a la base de datos 

include 'conexion.php';

// Escapar el valor de carrera para prevenir inyección SQL
$carrera = $conn->real_escape_string($_GET['carrera']);

$sql = "SELECT MAX(id_semestre) AS Total_Semestres
        FROM lime_uaim_materiasemestre
        WHERE id_carrera = $carrera";

// Ejecutar la consulta
$resultado = $conn->query($sql);

// Verificar si se encontraron resultados
if ($resultado->num_rows > 0) {
    // Obtener el resultado como un valor único
    $fila = $resultado->fetch_assoc();
    $total_semestres = $fila['Total_Semestres'];

    // Consulta preparada para evitar inyección SQL
    $sql2 = "SELECT *
             FROM lime_uaim_semestre
             
             LIMIT $total_semestres";

    $result = $conn->query($sql2);

    // Crear un array para almacenar las unidades académicas
    $semestre = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Agregar cada unidad académica al array
            $semestre[] = $row;
        }
    }
    $conn->close();
    // Devolver el resultado como JSON
    echo json_encode($semestre);
} else {
    echo "No se encontraron resultados.";
}
?>
