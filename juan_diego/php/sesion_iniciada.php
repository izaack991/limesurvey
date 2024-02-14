<?php
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

if ($validacion == 'uais.edu.mx' || 'gmail.com' ) {
    
    if ($usuariovalidacion[1] == true) {
        header('Location: Pagina_Docente.php');
    } else {
        header('Location: Pagina_Alumno.php');
    }
    
} else {
    echo '"<script language="javascript">alert("Solo puedes ingresar con un correo institucional UAIM");window.location.href="../../login/login.php"</script>"';
}