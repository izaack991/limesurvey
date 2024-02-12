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