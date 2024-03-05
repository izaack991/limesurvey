<?php 

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $unidadacademica = $_POST["unidadacademica"];
    $carrera = $_POST["carrera"];
    $semestre = $_POST["semestre"];
    $grupo = $_POST["grupo"];
    $alumno = $_POST["alumno"];
    $docente = $_POST["docente"];

    // Hacer lo que necesites con los datos recibidos
    // Por ejemplo, puedes imprimirlos
   // echo "unidadacademica: " . $unidadacademica . "<br>";
   // echo "carrera: " . $carrera. "<br>";
   // echo "semestre: " . $semestre . "<br>";
   // echo "grupo: " . $grupo. "<br>"; 
   // echo "alumno: " . $alumno . "<br>";
   // echo "docente: " . $docente. "<br>";
    $_SESSION['unidadacademica'] = $unidadacademica ;
    $_SESSION['carrera'] = $carrera ;
    $_SESSION['semestre'] = $semestre ;
    $_SESSION['grupo'] = $grupo ;
    $_SESSION['alumno'] = $alumno ;
    $_SESSION['docente'] = $docente ;
    header("Location: http://localhost/limesurvey/index.php/291758?newtest=Y&amp;lang=es");
}
?>