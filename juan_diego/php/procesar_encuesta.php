<?php
// Configuración de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unidad";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtener las selecciones del usuario
    $idUnidadAcademica = $_GET['unidadacademica'];
    $carrera = $_GET['carrera'];
    $idSemestre = $_GET['semestre'];
    $idGrupo = $_GET['grupo'];
    $alumno = $_GET['alumno'];
    $maestro = $_GET['maestro'];

    // Consulta para obtener carreras en función de la Unidad Académica seleccionada
    $stmt = $conn->prepare("SELECT ID_Carrera, nombre FROM Carrera WHERE ID_UnidadAcademica = :unidadacademica");
    $stmt->bindParam(':unidadacademica', $unidadacademica);
    $stmt->execute();
    $carreras = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Consulta para obtener semestres en función de la Carrera seleccionada
    $stmt = $conn->prepare("SELECT ID_Semestre, nombre FROM MateriaSemestre WHERE ID_Carrera = :carrera");
    $stmt->bindParam(':carrera', $carrera);
    $stmt->execute();
    $semestres = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Consulta para obtener grupos en función del Semestre seleccionado
    $stmt = $conn->prepare("SELECT ID_Grupo, nombre FROM Grupo WHERE ID_Semestre = :semestre");
    $stmt->bindParam(':semestre', $semestre);
    $stmt->execute();
    $grupos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Consulta para obtener alumnos en función del Grupo seleccionado
    $stmt = $conn->prepare("SELECT ID_Alumno, nombre FROM Alumno WHERE ID_Grupo = :grupo");
    $stmt->bindParam(':grupo', $grupo);
    $stmt->execute();
    $alumnos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Consulta para obtener maestros en función del Semestre y Grupo seleccionados
    $stmt = $conn->prepare("SELECT ID_Maestro, nombre FROM MaestroMateria WHERE ID_Semestre = :semestre AND ID_Grupo = :grupo");
    $stmt->bindParam(':semestre', $semestre);
    $stmt->bindParam(':grupo', $grupo);
    $stmt->execute();
    $maestros = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Devolver las opciones en formato JSON
    header('Content-Type: application/json');
    echo json_encode(['carreras' => $carreras, 'semestres' => $semestres, 'grupos' => $grupos, 'alumnos' => $alumnos, 'maestros' => $maestros]);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
