<?php 

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $tipo_encuesta = $_POST["tipo_encuesta"];
    $_SESSION['tipo_encuesta'] =$tipo_encuesta;
    if($tipo_encuesta == 1)
    {
    $unidadacademica = $_POST["unidadacademica"];
    $carrera = $_POST["carrera"];
    $semestre = $_POST["semestre"];
    $grupo = $_POST["grupo"];
    $alumno = $_POST["alumno"];
    $docente = $_POST["docente"];
    
    $_SESSION['unidadacademica'] = $unidadacademica ;
    $_SESSION['carrera'] = $carrera ;
    $_SESSION['semestre'] = $semestre ;
    $_SESSION['grupo'] = $grupo ;
    $_SESSION['alumno'] = $alumno ;
    $_SESSION['docente'] = $docente ;
    require "../ajax/php/conexion.php";

    // Consulta SQL para obtener el alumno por su ID
    $sql = "SELECT matricula,correo FROM lime_uaim_alumno WHERE correo = '$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Si se encuentra el alumno, se guarda cada columna en una variable
        $fila = $result->fetch_assoc();
        $matricula = $fila["matricula"];
        $correo = $fila["correo"];
        $_SESSION['matricula'] = $matricula;
        $_SESSION['correo'] = $correo;
    } 
    else {
        echo('no encontrado');
    }
    $conn->close();
    header("Location: http://localhost/limesurvey/index.php/291758?newtest=Y&amp;lang=es");
}
else if($tipo_encuesta == 2)
{
echo"autoevaluacion";    
}
else if($tipo_encuesta == 3)
{
echo"docente cordinador";
}
else if($tipo_encuesta == 4)
{
echo"evaluacion jefe de seccion academica";
}
else if($tipo_encuesta == 5) 
{
    echo"evaluacion par";
}
else
{
    echo'no se encontro el tipo de evaluacion';
}
}


?>
