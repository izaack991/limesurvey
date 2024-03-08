// Este script maneja los select de forma dinamica utilizando ajax 
$(document).ready(function() {
    // Cuando el documento está listo, ejecutar la función
    cargarunidadacademica();
  });

  function cargarunidadacademica() {
    $('#unidadacademica').append('<option>Selecciona Unidad</option>');
    // Utilizar AJAX para obtener las unidades académicas desde el servidor
    $.ajax({
      url: '../ajax/php/unidades_academicas.php', // Reemplaza con la ruta correcta
      method: 'GET',
      dataType: 'json', // Esperamos datos en formato JSON
      success: function(data) {
        // Limpiar el select actual
        $('#unidadacademica').empty();

        // Agregar las opciones al select
        $.each(data, function(index, unidad) {
          $('#unidadacademica').append('<option value="' + unidad.id_unidadacademica + '">' + unidad.nombre + '</option>');
        });
      },
      error: function(error) {
        console.error('Error al cargar unidades académicas:', error);
      }
    });
  }
  
  function cargarcarrera() {
    var unidadseleccionada = $('#unidadacademica').val();
    if (unidadseleccionada) {
        $.ajax({
            url: '../ajax/php/carrera.php',
            method: 'GET',
            dataType: 'json',  // Esperamos datos en formato JSON
            data: { unidadacademica: unidadseleccionada }, // Pasar la unidad académica seleccionada
            success: function (data) {
                $('#carrera').empty();
                $('#semestre').empty();
                $('#grupo').empty();
                $('#alumno').empty();
                $('#docente').empty();
                // Agregar las opciones al select
                $.each(data, function (index, carrera) {
                    $('#carrera').append('<option value="' + carrera.id_carrera + '">' + carrera.nombre + '</option>');
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

  function cargarsemestre() {
    var CarreraSeleccionada = $('#carrera').val();
    if (CarreraSeleccionada) {
       
        $.ajax({
            url: '../ajax/php/semestre.php',
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
                    $('#semestre').append('<option value="' + semestre.id_semestre + '">' + semestre.nombre+ '</option>');
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


function cargargrupo() {
  
  var SemestreSeleccionado = $('#semestre').val();
  var CarreraSeleccionada = $('#carrera').val();
  if (SemestreSeleccionado && CarreraSeleccionada) {
     
      $.ajax({
          url: '../ajax/php/grupo.php',
          method: 'GET',
          dataType: 'json',  // Esperamos datos en formato JSON
          data: { semestre: SemestreSeleccionado, carrera: CarreraSeleccionada }, // Pasar la unidad académica seleccionada
          success: function (data) {
            $('#grupo').empty();
            $('#alumno').empty();
            $('#docente').empty();
            // Agregar las opciones al select
            $.each(data, function (index, grupo) {
                $('#grupo').append('<option value="' + grupo.id_grupo + '">' + grupo.nombre+ '</option>');
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

function cargaralumno() {
  var GrupoSeleccionado = $('#grupo').val();
  if (GrupoSeleccionado) {
     
      $.ajax({
          url: '../ajax/php/alumno.php',
          method: 'GET',
          dataType: 'json',  // Esperamos datos en formato JSON
          data: { grupo: GrupoSeleccionado }, // Pasar la unidad académica seleccionada
          success: function (data) {
            $('#alumno').empty();
            $('#docente').empty();
            // Agregar las opciones al select
            $.each(data, function (index, alumno) {
                $('#alumno').append('<option value="' + alumno.matricula + '">' + alumno.nombre+ '</option>');
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


function cargardocente() {

      $.ajax({
          url: '../ajax/php/docente.php',
          method: 'GET',
          dataType: 'json',  // Esperamos datos en formato JSON
          data: {}, // Pasar la unidad académica seleccionada
          success: function (data) {
            $('#docente').empty();
            // Agregar las opciones al select
            $.each(data, function (index, docente) {
                $('#docente').append('<option value="' + docente.no_empleado + '">' + docente.nombre+ '</option>');
            });
        },
        error: function (error) {
            console.error('Error al cargar carreras:', error);
        }
    });
}

function boton(){
    var docente = $('#docente').val();

    if(docente == null)
    {
        boton.disabled = true;
    }
    else
    {
        boton.disabled = false;
    }
}