var redireccionando = false;

///// Verificar si existe el botón con id="ls-button-submit"
///if (document.getElementById("ls-button-submit")) {
//// // Evento click del botón
//// document.getElementById("ls-button-submit").addEventListener("click", function() {
/////  redireccionando = true;
/////  // Aquí puedes agregar la lógica para redirigir a otra página
//// });
///}
///
///// Agregar el evento antes de que se cierre la ventana
///window.addEventListener("beforeunload", function(event) {
//// // Verificar si se está redireccionando
//// if (!redireccionando) {
///// var confirmationMessage = "¿Seguro que quieres salir de esta página?";

///// (event || window.event).returnValue = confirmationMessage; // For IE and Firefox
///// return confirmationMessage; // For other browsers
//// }
///});