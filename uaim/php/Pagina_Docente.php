<?php 
error_reporting(0);
session_start();
print_r($_SESSION);
$validacion = $_SESSION['emaildominio'];
$correo = $_SESSION['cuenta'];

if ($correo == true){
    if ($validacion == true) {
        echo '"<script language="javascript">alert("Solo puedes ingresar con una cuenta de docente");window.location.href="../../login/login.php"</script>"';
    }
} else {
    echo '"<script language="javascript">alert("No tienes una sesion iniciada");window.location.href="../../login/login"</script>"';
}

//session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenar HTML en JavaScript</title>
    <!-- Agrega el enlace al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="card mb-3 shadow-lg mb-5 bg-body rounded" style="width: 36%; margin-left:32%; margin-top:50px;">
    <div class="card-body">
        <h5 class="card-title">Evaluación Docente.</h5>
        <div class="mb-3">
            <label for="tipoEncuesta" class="form-label">Selecciona el tipo de encuesta:</label>
            <select class="form-select" id="tipoEncuesta" name="tipoEncuesta" onclick="mostrarContenido()">
                <option value="seleccion_1">Autoevaluacion 1</option>
                <option value="seleccion_2">Evaluacion Docente Cordinador</option>
                <option value="seleccion_3">Evaluacion Jefe De Seccion Academica 3</option>
                <option value="seleccion_4">Evaluacion Pares 4</option>
            </select>
        </div>
        <div id="contenidoSeleccionado" class="mt-3">
            <!-- Aquí se mostrará el contenido seleccionado -->
        </div>
    </div>
</div>

<!-- Agrega el enlace al archivo JS de Bootstrap al final del cuerpo del documento -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function mostrarContenido() {
        var tipoEncuesta = document.getElementById("tipoEncuesta").value;
        var contenidoSeleccionado = "";

        switch (tipoEncuesta) {
    case "seleccion_1":
        contenidoSeleccionado = "<form action='Redireccion.php' method='post'><label> Auto Evaluacion </label><input type='hidden'name='tipo_encuesta' value='2'><select id='docente' onclick='cargar()'><option value=''>Seleccionar docente</option></select><button type='submit' id='enviar' class='btn btn-primary'>Enviar</button></form>";
        break;
    case "seleccion_2":
        contenidoSeleccionado = "<form action='Redireccion.php' method='post'><label> Evaluacion Docente Coordinador P.E</label><input type='hidden'name='tipo_encuesta' value='3'><select id='docentec' onclick='cargarc()'><option value=''>Seleccionar docente</option></select><button type='submit' id='enviar' class='btn btn-primary'>Enviar</button></form>";
        break;
    case "seleccion_3":
        contenidoSeleccionado = "<form action='Redireccion.php' method='post'><label> Evaluacion Docente Jefe de Seccion Academica</label><input type='hidden'name='tipo_encuesta' value='4'><select id='docentejsa' onclick='cargarjsa()'><option value=''>Seleccionar docente</option></select><button type='submit' id='enviar' class='btn btn-primary'>Enviar</button></form>";
        break;
    case "seleccion_4":
        contenidoSeleccionado = "<form action='Redireccion.php' method='post'><label> Evaluacion Pares </label><input type='hidden'name='tipo_encuesta' value='5'><select id='docentep' onclick='cargarp()'><option value=''>Seleccionar docente</option></select><button type='submit' id='enviar' class='btn btn-primary'>Enviar</button></form>";
        break;
    default:
        contenidoSeleccionado = "<p>Selección no válida.</p>";
}


        // Concatenar y mostrar el contenido seleccionado dentro de la card
        document.getElementById("contenidoSeleccionado").innerHTML = contenidoSeleccionado;
    }
</script>
<script src="../ajax/js/docente.js"></script>
</body>
</html>
