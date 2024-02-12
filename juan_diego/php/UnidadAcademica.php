<?php
// Configuración de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unidad";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['obtenerUnidades'])) {
        // Consulta para obtener todas las unidades académicas
        $stmt = $conn->query("SELECT ID_unidadacademica, nombre FROM UnidadAcademica");
        $unidades = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Devolver las opciones en formato JSON
        echo json_encode(['unidades' => $unidades]);
        exit; // Terminar la ejecución del script después de devolver las unidades académicas
    }

    // Resto del código para las otras solicitudes (carreras, semestres, etc.)
    // ...
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
