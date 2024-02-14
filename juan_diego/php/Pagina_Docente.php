<?php 
error_reporting(0);
session_start();
include '../../login/redirect.php';
$correo = $_SESSION['cuenta'];
$nombre = $_SESSION['nombre'];
$emaildominio = $_SESSION['emaildominio'];
$emailusuario = $_SESSION['emailusuario'];

if ($emaildominio == '') {
    echo '"<script language="javascript">alert("No tienes una sesion iniciada");window.location.href="../../login/login.php"</script>"';
}
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
    
    <h3><?php echo $correo?></h3>
    <h3><?php echo $emailusuario?></h3>
    <h3><?php echo $emaildominio?></h3>
    <h3><?php echo $nombre?></h3>

<div class="card mb-3 shadow-lg mb-5 bg-body rounded" style="width: 36%; margin-left:32%; margin-top:50px;">
    <div class="card-body">
        <h5 class="card-title">Evaluación Docente.</h5>
        <div class="mb-3">
            <label for="tipoEncuesta" class="form-label">Selecciona el tipo de encuesta:</label>
            <select class="form-select" id="tipoEncuesta" name="tipoEncuesta">
                <option value="seleccion_1">Autoevaluacion 1</option>
                <option value="seleccion_2">Evaluacion Par 2</option>
                <option value="seleccion_3">Selección 3</option>
                <option value="seleccion_4">Selección 4</option>
                <option value="seleccion_5">Selección 5</option>
            </select>
        </div>

        <button type="button" class="btn btn-primary" onclick="mostrarContenido()">Aceptar</button>

        <div id="contenidoSeleccionado" class="mt-3">
            <!-- Aquí se mostrará el contenido seleccionado -->
        </div>
    </div>
</div>

<!-- Agrega el enlace al archivo JS de Bootstrap al final del cuerpo del documento -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function mostrarContenido() {
        var tipoEncuesta = document.getElementById("tipoEncuesta").value;
        var contenidoSeleccionado = "";

        switch (tipoEncuesta) {
            case "seleccion_1":
                contenidoSeleccionado = "<form><label>Formulario para Selección 1</label><input type='text' placeholder='Ingrese datos'></form>";
                break;
            case "seleccion_2":
                contenidoSeleccionado = "<form><label>Formulario para Selección 2</label><input type='text' placeholder='Ingrese datos'></form>";
                break;
            case "seleccion_3":
                contenidoSeleccionado = "<form><label>Formulario para Selección 3</label><input type='text' placeholder='Ingrese datos'></form>";
                break;
            case "seleccion_4":
                contenidoSeleccionado = "<form><label>Formulario para Selección 4</label><input type='text' placeholder='Ingrese datos'></form>";
                break;
            case "seleccion_5":
                contenidoSeleccionado = "<form><label>Formulario para Selección 5</label><input type='text' placeholder='Ingrese datos'></form>";
                break;
            default:
                contenidoSeleccionado = "<p>Selección no válida.</p>";
        }

        // Concatenar y mostrar el contenido seleccionado dentro de la card
        document.getElementById("contenidoSeleccionado").innerHTML = contenidoSeleccionado;
    }
</script>

</body>
</html>
