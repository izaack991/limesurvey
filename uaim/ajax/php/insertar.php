<?php
$servername = "localhost";  // Cambia esto si tu servidor de base de datos está en otro lugar
$username = "root";         // Usuario por defecto en XAMPP
$password = "";             // Contraseña por defecto en XAMPP
$dbname = "limesurveydb";         // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$conn->set_charset("utf8");
$atoken = $_COOKIE['atoken'];
$tipo_encuesta = $_SESSION['tipo_encuesta'];
if( $tipo_encuesta== 1) {
    session_start();
    $docente = $_SESSION['docente'];
    $id_unidadAcademica = $_SESSION['unidadacademica'] ;
    $id_carrera = $_SESSION['carrera'];
    $id_semestre = $_SESSION['semestre'];
    $matricula = $_SESSION['matricula'] ;
    $correo = $_SESSION['correo'] ;
    $grupo = $_SESSION['grupo'] ;
    ////////////////////////////////////////////////////////////////////////////////////////////////
    $sql = "SELECT MAX(id) AS id
    FROM lime_survey_291758
    WHERE docente = 0 AND token = '$atoken'";
    $resultado = $conn->query($sql);
    print_r($_SESSION);
    // Verificar si se encontraron resultados
    if ($resultado->num_rows > 0) {
        // Obtener el resultado como un valor único
        $fila = $resultado->fetch_assoc();
        $id = $fila['id'];
    
        // Consulta preparada para evitar inyección SQL
        $sql2 = "UPDATE lime_survey_291758
        SET docente = '$docente'
        WHERE id = $id ";
    
        $conn->query($sql2);
        $conn->close();
        include 'conexion.php';
        // Cerrar la conexión
        $sql3 = "INSERT INTO lime_uaim_encuesta (token, id_evaluador, id_evaluado, fecha, id_unidadAcademica, id_carrera, id_semestre, id_grupo) VALUES ('$atoken', '$matricula', '$docente', NOW(), $id_unidadAcademica, $id_carrera, $id_semestre, $grupo)";
    
    
        $resultado = $conn->query($sql3);
        $conn->close();
    } else {
        echo "No se encontraron resultados.";
    }
    echo('<script>alert("asdasdas")</script>');
}
?>