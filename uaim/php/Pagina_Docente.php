<?php 
error_reporting(0);
session_start();
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

<div class="card mb-3 shadow-lg mb-5 bg-body rounded" style="width: 50%; margin-left:25%; margin-top:50px;">
    <div class="card-header" style="background-color: #333641;">
        <h2 class="text-center text-white" style="font-weight:bold;">EVALUACIÓN DOCENTE</h5>
    </div>
    <div class="card-body">
        <h5 class="text-center mb-4">Por favor seleccione la encuesta que desea realizar.</h4>
        <div class="row">
            <div class="input-group">
                <span class="input-group-text text-white fw-bold justify-content-center" style="background-color:#14ae5c;width:11rem;" for="tipoEncuesta">Tipo de encuesta</span>
                <select class="form-select" id="tipoEncuesta" name="tipoEncuesta" onclick="mostrarContenido(),cargara(),cargarc(),cargarjsa(),cargarp()">
                    <option value="seleccion_1" id="es_docente1">Autoevaluacion</option>
                    <option value="seleccion_2" id="es_coordinador">Evaluacion Docente Cordinador</option>
                    <option value="seleccion_3" id="es_jefeseccion">Evaluacion Jefe De Seccion Academica</option>
                    <option value="seleccion_4" id="es_docente">Evaluacion Pares</option>
                </select>
            </div>
        </div>
        
        
        
        


            <script>
            // Obtener el valor de la variable de sesión en JavaScript
            var tipo_empleado = <?php echo json_encode($_SESSION['tipo_empleado']); ?>;
            var es_docente = <?php echo json_encode($_SESSION['es_docente']); ?>;

            // Lógica condicional con JavaScript
            if (tipo_empleado == '1') {
                // Ocultar la opción cambiando el estilo
                if(es_docente == '1') {
                    document.getElementById('es_coordinador').style.display = 'none';
                    document.getElementById('es_jefeseccion').style.display = 'none';
                }
            }
            if (tipo_empleado == '2') {
                // Ocultar la opción cambiando el estilo
                document.getElementById('es_jefeseccion').style.display = 'none';
                if(es_docente == '0') {
                    document.getElementById('es_docente1').style.display = 'none';
                    document.getElementById('es_docente').style.display = 'none';
                }
            }
            if (tipo_empleado == '3') {
                // Ocultar la opción cambiando el estilo
                document.getElementById('es_coordinador').style.display = 'none';
                if (es_docente == '0') {
                    document.getElementById('es_docente1').style.display = 'none';
                    document.getElementById('es_docente').style.display = 'none';
                }
            }
            </script>

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
        contenidoSeleccionado = "<form action='Redireccion.php' method='post'><div class='row mb-3 mx-1'><div class='input-group'><span class='input-group-text text-white fw-bold justify-content-center' style='background-color:#14ae5c;width:11rem;' for='docentea'>Auto Evaluacion</span><input type='hidden' name='tipo_encuesta' value='2'><select class='form-select' id='docentea' name='docentea'><option value=''>Seleccionar docente</option></select></div></div><div class='row justify-content-center'><button type='submit' id='enviar' class='btn btn-primary w-50 mb-3'>Enviar</button></div></form>";
        break;
    case "seleccion_2":
        contenidoSeleccionado = "<form action='Redireccion.php' method='post'><div class='row mb-3 mx-1'><div class='input-group'><span class='input-group-text text-white fw-bold justify-content-center' style='background-color:#14ae5c;' for='docentec'>Evaluacion Docente Coordinador P.E</span><input type='hidden' name='tipo_encuesta' value='3'><select class='form-select' id='docentec' name='docentec'><option value=''>Seleccionar docente</option></select></div></div><div class='row justify-content-center'><button type='submit' id='enviar' class='btn btn-primary w-50 mb-3'>Enviar</button></div></form>";
        break;
    case "seleccion_3":
        contenidoSeleccionado = "<form action='Redireccion.php' method='post'><div class='row mb-3 mx-1'><div class='input-group'><span class='input-group-text text-white fw-bold justify-content-center' style='background-color:#14ae5c;' for='docentejsa'>Evaluación Docente Jefe de Sección Académica</span><input type='hidden' name='tipo_encuesta' value='4'><select class='form-select' id='docentejsa'name='docentejsa'><option value=''>Seleccionar docente</option></select></div></div><div class='row justify-content-center'><button type='submit' id='enviar' class='btn btn-primary w-50 mb-3'>Enviar</button></div></form>";
        break;
    case "seleccion_4":
        contenidoSeleccionado = "<form action='Redireccion.php' method='post'><div class='row mb-3 mx-1'><div class='input-group'><span class='input-group-text text-white fw-bold justify-content-center' style='background-color:#14ae5c;width:11rem;' for='docentep'>Evaluacion Pares</span><input type='hidden' name='tipo_encuesta' value='5'><select class='form-select' id='docentep'name='docentep'><option value=''>Seleccionar docente</option></select></div></div><div class='row justify-content-center'><button type='submit' id='enviar' class='btn btn-primary w-50 mb-3'>Enviar</button></div></form>";
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
