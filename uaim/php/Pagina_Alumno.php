<?php 
<<<<<<< HEAD
include '../ajax/php/verificacion_vacio.php';
?>
=======
include '../ajax/verificacion_vacio.php';

//error_reporting(0);
session_start();

$validacion = $_SESSION['emaildominio'];
$correo = $_SESSION['cuenta'];

if ($correo == true){
    if ($validacion == false) {
        echo '"<script language="javascript">alert("Solo puedes ingresar con una cuenta de Alumno");window.location.href="../../login/login.php"</script>"';
    }
} else {
    echo '"<script language="javascript">alert("No tienes una sesion iniciada");window.location.href="../../login/login"</script>"';
}

session_destroy();
?>

>>>>>>> 4121ffcb45cfa6b1c1d8a1e90c94d78ccbceb206
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <title>Formulario</title>
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Evaluacion Docente</h5>

            <form action="Redireccion.php" method="post">
              <div class="mb-3">
                <label for="unidadacademica" class="form-label">Unidad Académica</label>
                <select class="form-select" id="unidadacademica" name="unidadacademica" onclick="cargarcarrera()">
                <option value=""></option>
                </select>
              </div>

              <div class="mb-3">
                <label for="carrera" class="form-label">carrera</label>
                <select class="form-select" id="carrera" name="carrera" onclick="cargarsemestre()">
                <option value=""></option>
                </select>
              </div>

              <div class="mb-3">
                <label for="semestre" class="form-label">semestre</label>
                <select class="form-select" id="semestre" name="semestre" onclick="cargargrupo()">
                <option value=""></option>
                </select>
              </div>

              <div class="mb-3">
                <label for="grupo" class="form-label">grupo</label>
                <select class="form-select" id="grupo" name="grupo" onclick="cargaralumno()">
                <option value=""></option>
                </select>
              </div>

              <div class="mb-3">
                <label for="alumno" class="form-label">alumno</label>
                <select class="form-select" id="alumno" name="alumno" onclick="cargardocente()">
                <option value=""></option>
                </select>
              </div>

              <div class="mb-3">
                <label for="docente" class="form-label">Docente</label>
                <select class="form-select" id="docente" name="docente" onclick="boton()">
                <option value=""></option>
                </select>
              </div>

              <button type="submit" id="enviar" class="btn btn-primary">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="../ajax/js/unidadacademica.js"></script>
</body>
</html>
