<?php
//print_r($_SESSION);
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    session_start();
    unset($_SESSION['docente']);
    $tipo_encuesta = $_POST["tipo_encuesta"];
    $_SESSION['tipo_encuesta'] = $tipo_encuesta;
    if($tipo_encuesta == 1)
        {
        $unidadacademica = $_POST["unidadacademica"];
        $carrera = $_POST["carrera"];
        $semestre = $_POST["semestre"];
        $grupo = $_POST["grupo"];
        $alumno = $_POST["alumno"];
        $docente = $_POST["docente"];
        
        $_SESSION['unidadacademica'] = $unidadacademica;
        $_SESSION['carrera'] = $carrera;
        $_SESSION['semestre'] = $semestre;
        $_SESSION['grupo'] = $grupo;
        $_SESSION['alumno'] = $alumno;
        $_SESSION['docente'] = $docente;
        print_r($_SESSION);
        //require "../ajax/php/conexion.php";
        // Consulta SQL para obtener el alumno por su ID
        //$sql = "SELECT matricula FROM lime_uaim_alumno WHERE correo = '$correo'";
        //$result = $conn->query($sql);

        //if ($result->num_rows > 0) {
        ////// Si se encuentra el alumno, se guarda cada columna en una variable
        ////$fila = $result->fetch_assoc();
        ////$matricula = $fila["matricula"];
        ////$correo = $fila["correo"];
        ////$_SESSION['matricula'] = $matricula;
        ////echo '-------------------------------------------------------------------------';
        //} 
        //else {
        ////echo('no encontrado');
        //}
        //$conn->close();

        header("Location: http://localhost/limesurvey/index.php/595288?newtest=Y&lang=es");
    }
    else if($tipo_encuesta == 2)
    {
        //include '../ajax/php/insertar.php';
        //echo "<p>$tipo_encuesta</p>";
        echo "<p>$docente1</p>";
        header("Location: http://localhost/limesurvey/index.php/149276?newtest=Y&lang=es-MX");

        print_r($_SESSION);
    }
    else if($tipo_encuesta == 3)
    {
        echo"docente cordinador";
        $docenteReceptor = $_POST["docentec"];
        $_SESSION['docenteReceptor'] = $docenteReceptor;
        echo $docente;
        //include '../ajax/php/insertar.php';
        header("Location: http://localhost/limesurvey/index.php/276738?newtest=Y&lang=es-MX");
    }
    else if($tipo_encuesta == 4)
    {

        echo"evaluacion jefe de seccion academica";
        $docenteReceptor = $_POST["docentejsa"];
        $_SESSION['docenteReceptor'] = $docenteReceptor;
        echo "<p>$tipo_encuesta</p>";
        echo $docente;

        //include '../ajax/php/insertar.php';
        header("Location: http://localhost/limesurvey/index.php/294251?newtest=Y&lang=es-MX");
    }
    else if($tipo_encuesta == 5) 
    {
        echo"evaluacion par";
        $docenteReceptor = $_POST["docentep"];
        $_SESSION['docenteReceptor'] = $docenteReceptor;
        echo $docentep;
        //include '../ajax/php/insertar.php';
        header("Location: http://localhost/limesurvey/index.php/152454?newtest=Y&lang=es-MX");
    }
    else
    {
        echo'no se encontro el tipo de evaluacion';
    }
}


?>
