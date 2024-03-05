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


//////////////////////////////////////////////////////////////////////////////////////////////////////

$atoken = $_COOKIE['atoken'];
if(isset($_COOKIE['atoken'])) {
    // Obtener el valor de la cookie
    $miVariable = $_COOKIE['atoken'];
    echo "El valor de miCookie es: " . $miVariable;
} else {
    echo "La cookie no está seteada.";
}
session_start();
$docente = $_SESSION['docente'];
////////////////////////////////////////////////////////////////////////////////////////////////
$sql = "SELECT MAX(id) AS id
FROM lime_survey_291758
WHERE docente = 0 AND token = '$atoken'";

$resultado = $conn->query($sql);

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

    // Cerrar la conexión
    $conn->close();
} else {
    echo "No se encontraron resultados.";
}
echo('<script>alert("asdasdas")</script>');
?>