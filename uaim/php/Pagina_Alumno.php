<?php 

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

?>

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

        <div class="card shadow ">
          <div class="card-header" style="background-color: #333641;">
              <h2 class="text-center text-white" style="font-weight: bold;">EVALUACIÓN DOCENTE</h2>
          </div>
          <div class="card-body">
            <h5 class="text-center mb-4">Por favor seleccione la información relacionada a su unidad académica para continuar.</h4>
            <form action="Redireccion.php" method="post">
              
              <div class="row mb-3">
                <div class="input-group">
                    <span class="input-group-text text-white fw-bold justify-content-center" style="background-color:#14ae5c;width:11rem;" for="unidadacademica">Unidad Académica</span>
                    <select class="form-select" id="unidadacademica" name="unidadacademica" onclick="cargarcarrera()">
                      <option value=""></option>
                    </select>
                </div>
              </div>

              <div class="row mb-3">
                <div class="input-group">
                    <span class="input-group-text text-white fw-bold justify-content-center" style="background-color:#14ae5c;width:11rem;" for="carrera">Carrera</span>
                    <select class="form-select" id="carrera" name="carrera" onclick="cargarsemestre()">
                      <option value=""></option>
                    </select>
                </div>
              </div>

              <div class="row mb-3">
                <div class="input-group">
                    <span class="input-group-text text-white fw-bold justify-content-center" style="background-color:#14ae5c;width:11rem;" for="semestre">Semestre</span>
                    <select class="form-select" id="semestre" name="semestre" onclick="cargargrupo()">
                      <option value=""></option>
                    </select>
                </div>
              </div>
              
              <div class="row mb-3">
                <div class="input-group">
                    <span class="input-group-text text-white fw-bold justify-content-center" style="background-color:#14ae5c;width:11rem;" for="grupo">Grupo</span>
                    <select class="form-select" id="grupo" name="grupo" onclick="cargaralumno()">
                      <option value=""></option>
                    </select>
                </div>
              </div>
              
              <div class="row mb-3">
                <div class="input-group">
                    <span class="input-group-text text-white fw-bold justify-content-center" style="background-color:#14ae5c;width:11rem;" for="alumno">Alumno</span>
                    <select class="form-select" id="alumno" name="alumno" onclick="cargardocente()">
                      <option value=""></option>
                    </select>                    
                </div>
              </div>
              
              <div class="row mb-3">
                <div class="input-group">
                    <span class="input-group-text text-white fw-bold justify-content-center" style="background-color:#14ae5c;width:11rem;" for="docente">Docente</span>
                    <select class="form-select" id="docente" name="docente" onclick="boton()">
                      <option value=""></option>
                    </select>                                      
                </div>
              </div>

              <input type="hidden" id="tipo_encuesta" name="tipo_encuesta" value="1">
              <div class="row justify-content-center">
                <button type="submit" id="enviar" class="btn btn-primary w-50 text-white fs-5 " style="font-weight:bold;">Enviar</button>
              </div>
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
