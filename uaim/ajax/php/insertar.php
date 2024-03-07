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
session_start();
$id_respuesta = $_COOKIE['id_respuesta'];
$tipo_encuesta = $_SESSION['tipo_encuesta'];
//if( $_SESSION['no_empleado'])
//{
    //$docente1 = $_SESSION['no_empleado'];
//}
if( $tipo_encuesta== 1)
{
    $docente = $_SESSION['docente'];
    $id_unidadAcademica = $_SESSION['unidadacademica'] ;
    $id_carrera = $_SESSION['carrera'];
    $id_semestre = $_SESSION['semestre'];
    $matricula = $_SESSION['alumno'];
    $correo = $_SESSION['cuenta'];
    $grupo = $_SESSION['grupo'] ;
    ////////////////////////////////////////////////////////////////////////////////////////////////
    //$sql = "SELECT MAX(id) AS id
    //FROM lime_survey_291758
    //WHERE id_respuesta = '$id_respuesta'";
    //$resultado = $conn->query($sql);
    print_r($_SESSION);
    // Verificar si se encontraron resultados
   // if ($resultado->num_rows > 0) {
        // Obtener el resultado como un valor único
        //$fila = $resultado->fetch_assoc();
        //$id = $fila['id'];
    
        // Consulta preparada para evitar inyección SQL
       //$sql2 = "UPDATE lime_survey_595288
        //SET docente = '$docente'
        //WHERE id = $id ";
    
        //$conn->query($sql2);
        //$conn->close();
        include 'conexion.php';
        // Cerrar la conexión
        $sql3 = "INSERT INTO lime_uaim_encuesta (id_respuesta, id_encuesta,id_evaluador, id_evaluado, fecha, id_unidadAcademica, id_carrera, id_semestre, id_grupo) VALUES ('$id_respuesta','1', '$matricula', '$docente', NOW(), $id_unidadAcademica, $id_carrera, $id_semestre, $grupo)";
    
        $resultado = $conn->query($sql3);
        $conn->close();
        setcookie('id_respuesta', '', time() - 3600, '/');
        header("Location: http://localhost/limesurvey/index.php/595288?newtest=Y&lang=es");
}
else if($tipo_encuesta == 2)
{
            include 'conexion.php';
        // Cerrar la conexión
        $sql3 = "INSERT INTO lime_uaim_encuesta (token, id_evaluador, id_evaluado, fecha, id_unidadAcademica, id_carrera, id_semestre, id_grupo) VALUES ('$atoken', '$matricula', '$docente', NOW(), $id_unidadAcademica, $id_carrera, $id_semestre, $grupo)";
        $conn->query($sql3);
        $conn->close();
}
else if($tipo_encuesta == 3)
{
    include 'conexion.php';
    // Cerrar la conexión
    $sql3 = "INSERT INTO lime_uaim_encuesta (token, id_evaluador, id_evaluado, fecha) VALUES ('1', '$docente1', '$docente', NOW())";

    $conn->query($sql3);
    $conn->close();
}
else if($tipo_encuesta == 4)
{
    include 'conexion.php';
    // Cerrar la conexión
    $sql3 = "INSERT INTO lime_uaim_encuesta (token, id_evaluador, id_evaluado, fecha) VALUES ('2', '$docente1', '$docente', NOW())";

    $conn->query($sql3);
    $conn->close();
}
else if($tipo_encuesta == 5) 
{
    include 'conexion.php';
    // Cerrar la conexión
    $sql3 = "INSERT INTO lime_uaim_encuesta (token, id_evaluador, id_evaluado, fecha) VALUES ('3', '$docente1', '$docente', NOW())";
    $conn->query($sql3);
    $conn->close();
}
else
{
    echo'no se encontro el tipo de evaluacion';
}

?>