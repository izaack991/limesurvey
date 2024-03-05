<?php
error_reporting(0);
session_start();

$correo = $_SESSION['cuenta'];

// Restricción de dominio de email
$emaildominio = explode('@', $correo);

$_SESSION['emaildominio'] = $emaildominio[1];
$_SESSION['emailusuario'] = $emaildominio[0];

$usuariovalidacion = $emaildominio[1];

if ($correo == true){
    if ($usuariovalidacion == true) {
        header('Location: Pagina_Alumno');
    } else {
        header('Location: Pagina_Docente');
    }
        
    } else {
    echo '"<script language="javascript">alert("No tienes una sesion iniciada");window.location.href="../../login/login"</script>"';
}
