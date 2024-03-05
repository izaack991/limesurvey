<?php
error_reporting(0);
session_start();
include '../../login/redirect.php';

$correo = $_SESSION['cuenta'];
$nombre = $_SESSION['nombre'];
// Restricción de dominio de email

$emaildominio = explode('@', $correo);

$_SESSION['emaildominio'] = $emaildominio[1];
$_SESSION['emailusuario'] = $emaildominio[0];

$usuariovalidacion = explode('.', $emaildominio[0]);

$validacion = $emaildominio[1];

if ($correo == true){
    if ($validacion == 'uais.edu.mx' || 'gmail.com' ) {
    
        if ($usuariovalidacion[1] == true) {
            header('Location: Pagina_Docente');
        } else {
            header('Location: Pagina_Alumno');
        }
        
    } else {
        echo '"<script language="javascript">alert("Solo puedes ingresar con un correo institucional UAIM");window.location.href="../../login/login.php"</script>"';
    }
} else {
    echo '"<script language="javascript">alert("No tienes una sesion iniciada");window.location.href="../../login/login"</script>"';
}
