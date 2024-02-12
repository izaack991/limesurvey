
$(document).ready(function() {
    // Cuando el documento está listo, ejecutar la función
    cargarUnidadesAcademicas();
  });

  function cargarUnidadesAcademicas() {
    $('#unidadacademica').append('<option>Selecciona Unidad</option>');
    // Utilizar AJAX para obtener las unidades académicas desde el servidor
    $.ajax({
      url: '../ajax/unidades_academicas.php', // Reemplaza con la ruta correcta
      method: 'GET',
      dataType: 'json', // Esperamos datos en formato JSON
      success: function(data) {
        // Limpiar el select actual
        $('#unidadacademica').empty();

        // Agregar las opciones al select
        $.each(data, function(index, unidad) {
          $('#unidadacademica').append('<option value="' + unidad.ID_UnidadAcademica + '">' + unidad.nombre + '</option>');
        });
      },
      error: function(error) {
        console.error('Error al cargar unidades académicas:', error);
      }
    });
  }
  
  function cargarCarreras() {
    var unidadSeleccionada = $('#unidadacademica').val();

    if (unidadSeleccionada) {
       
        $.ajax({
            url: '../ajax/carrera.php',
            method: 'GET',
            dataType: 'json',  // Esperamos datos en formato JSON
            data: { unidadacademica: unidadSeleccionada }, // Pasar la unidad académica seleccionada
            success: function (data) {
                $('#carrera').empty();
                $('#semestre').empty();
                $('#grupo').empty();
                $('#alumno').empty();
                $('#docente').empty();
                // Agregar las opciones al select
                $.each(data, function (index, carrera) {
                    $('#carrera').append('<option value="' + carrera.ID_Carrera + '">' + carrera.nombre + '</option>');
                });
            },
            error: function (error) {
                console.error('Error al cargar carreras:', error);
            }
        });
    } else {
        // Limpiar el select de carreras si no hay unidad académica seleccionada
        $('#carrera').empty();
    }
}

  function cargarSemestre() {
    var CarreraSeleccionada = $('#carrera').val();
    if (CarreraSeleccionada) {
       
        $.ajax({
            url: '../ajax/semestre.php',
            method: 'GET',
            dataType: 'json',  // Esperamos datos en formato JSON
            data: { carrera: CarreraSeleccionada }, // Pasar la unidad académica seleccionada
            success: function (data) {
                $('#semestre').empty();
                $('#grupo').empty();
                $('#alumno').empty();
                $('#docente').empty();

                // Agregar las opciones al select
                $.each(data, function (index, semestre) {
                    $('#semestre').append('<option value="' + semestre.ID_Semestre + '">' + semestre.nombre+ '</option>');
                });
            },
            error: function (error) {
                console.error('Error al cargar carreras:', error);
            }
        });
    } else {
        // Limpiar el select de carreras si no hay unidad académica seleccionada
        $('#semestre').empty();
    }
}


function cargarGrupo() {
  
  var SemestreSeleccionado = $('#semestre').val();
  var CarreraSeleccionada = $('#carrera').val();
  

  if (SemestreSeleccionado && CarreraSeleccionada) {
     
      $.ajax({
          url: '../ajax/grupo.php',
          method: 'GET',
          dataType: 'json',  // Esperamos datos en formato JSON
          data: { semestre: SemestreSeleccionado, carrera: CarreraSeleccionada }, // Pasar la unidad académica seleccionada
          success: function (data) {
            $('#grupo').empty();
            $('#alumno').empty();
            $('#docente').empty();
            // Agregar las opciones al select
            $.each(data, function (index, grupo) {
                $('#grupo').append('<option value="' + grupo.ID_grupo + '">' + grupo.nombre+ '</option>');
            });
        },
        error: function (error) {
            console.error('Error al cargar carreras:', error);
        }
    });
} else {
    // Limpiar el select de carreras si no hay unidad académica seleccionada
    $('#grupo').empty();
}
}

function cargarAlumno() {
  var grupoSeleccionado = $('#grupo').val();
  alert (grupoSeleccionado);
  

  if (grupoSeleccionado) {
     
      $.ajax({
          url: '../ajax/alumno.php',
          method: 'GET',
          dataType: 'json',  // Esperamos datos en formato JSON
          data: { grupo: grupoSeleccionado }, // Pasar la unidad académica seleccionada
          success: function (data) {
            $('#alumno').empty();
            $('#docente').empty();
            // Agregar las opciones al select
            $.each(data, function (index, alumno) {
                $('#alumno').append('<option value="' + alumno.ID_Alumno + '">' + alumno.nombre+ '</option>');
            });
        },
        error: function (error) {
            console.error('Error al cargar carreras:', error);
        }
    });
} else {
    // Limpiar el select de carreras si no hay unidad académica seleccionada
    $('#alumno').empty();
}
}


function cargarDocente() {
  var grupoSeleccionado = $('#grupo').val();
  alert (grupoSeleccionado);
  

  if (grupoSeleccionado) {
     
      $.ajax({
          url: '../ajax/alumno.php',
          method: 'GET',
          dataType: 'json',  // Esperamos datos en formato JSON
          data: { grupo: grupoSeleccionado }, // Pasar la unidad académica seleccionada
          success: function (data) {
            $('#docente').empty();
            // Agregar las opciones al select
            $.each(data, function (index, alumno) {
                $('#alumno').append('<option value="' + alumno.ID_Alumno + '">' + alumno.nombre+ '</option>');
            });
        },
        error: function (error) {
            console.error('Error al cargar carreras:', error);
        }
    });
} else {
    // Limpiar el select de carreras si no hay unidad académica seleccionada
    $('#alumno').empty();
}
}
