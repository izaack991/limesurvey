function insertar() 
{$(document).ready(function() {
    $.ajax({
        url: '../uaim/ajax/php/insertar.php',
        method: 'POST', // o 'GET' dependiendo de lo que necesites
        data: { }, // datos opcionales que deseas enviar al archivo PHP
        success: function(response) {
            // Maneja la respuesta del archivo PHP aquí
            console.log(response);
            alert('ayudame diosito');

        },
        error: function(xhr, status, error) {
            // Maneja cualquier error que ocurra durante la solicitud AJAX
            console.error(error);
        }
    });
});
}