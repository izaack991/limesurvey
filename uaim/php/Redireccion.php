<?php 
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $length = 15; // Puedes ajustar esto según tus necesidades
    $id_respuesta = bin2hex(random_bytes($length));
    setcookie("id_respuesta", $id_respuesta, time() + (86400 * 30), "/");
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
        echo"autoevaluacion";
        include '../ajax/php/insertar.php';
    }
    else if($tipo_encuesta == 3)
    {
        echo"docente cordinador";
        $docente = $_POST["docentec"];
        $_SESSION['docente'] = $docente;
        echo $docente;
        include '../ajax/php/insertar.php';
    }
    else if($tipo_encuesta == 4)
    {
        echo"evaluacion jefe de seccion academica";
        $docente = $_POST["docentejsa"];
        $_SESSION['docente'] = $docente;
        echo $docente;
        include '../ajax/php/insertar.php';
    }
    else if($tipo_encuesta == 5) 
    {
        echo"evaluacion par";
        $docente = $_POST["docentep"];
        $_SESSION['docente'] = $docente;
        echo $docente;
        include '../ajax/php/insertar.php';
    }
    else
    {
        echo'no se encontro el tipo de evaluacion';
    }
}


?>
