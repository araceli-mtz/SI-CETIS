<?php
function usuario_autenticado() {
    if(!revisar_usuario() ){
        header('Location:login-personal.php');
        exit();
    }
}
function revisar_usuario() {
    $usuario_admin = $_SESSION['tipousuario'];
    if ($usuario_admin == 1) {
        return isset($usuario_admin);
    } 
}
session_start();
usuario_autenticado();