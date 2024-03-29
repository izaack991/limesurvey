function cargarc() {
    $.ajax({
        url: '../ajax/php/docentec.php',
        method: 'GET',
        dataType: 'json',  // Esperamos datos en formato JSON
        success: function (data) {
            $('#docentec').empty();
            // Agregar las opciones al select
            $.each(data, function (index, docentec) {
                $('#docentec').append('<option value="' + docentec.no_empleado + '">' + docentec.nombre+ ' ' + docentec.apellido+'</option>');
            });
        },
        error: function (error) {
            console.error('Error al cargar evaluacion cordinador:', error);
        }
    });
}

function cargarjsa() {
    $.ajax({
        url: '../ajax/php/docentejsa.php',
        method: 'GET',
        dataType: 'json',  // Esperamos datos en formato JSON
        success: function (data) {
            $('#docentejsa').empty();
            // Agregar las opciones al select
            $.each(data, function (index, docentejsa) {
                $('#docentejsa').append('<option value="' + docentejsa.no_empleado + '">' + docentejsa.nombre+ ' ' + docentejsa.apellido+'</option>');
            });
        },
        error: function (error) {
            console.error('Error al cargar docentejsas:', error);
        }
    });
}

function cargarp() {
    $.ajax({
        url: '../ajax/php/docentep.php',
        method: 'GET',
        dataType: 'json',  // Esperamos datos en formato JSON
        success: function (data) {
            $('#docentep').empty();
            // Agregar las opciones al select
            $.each(data, function (index, docentep) {
                $('#docentep').append('<option value="' + docentep.no_empleado + '">' + docentep.nombre+ ' ' + docentep.apellido+'</option>');
            });
        },
        error: function (error) {
            console.error('Error al cargar evaluacion par:', error);
        }
    });
}

function cargara() {
    $.ajax({
        url: '../ajax/php/docentea.php',
        method: 'GET',
        dataType: 'json',  // Esperamos datos en formato JSON
        success: function (data) {
            $('#docentea').empty();
            // Agregar las opciones al select
            $.each(data, function (index, docentea) {
                $('#docentea').append('<option value="' + docentea.no_empleado + '">' + docentea.nombre+ ' ' + docentea.apellido+'</option>');
            });
        },
        error: function (error) {
            console.error('Error al cargar evaluacion par:', error);
        }
    });
}

