<?php
function usuario_autenticado() {
    if(!revisar_usuario() ){
        header('Location:login-aspirante.php');
        exit();
    }
}
function revisar_usuario() {
    $usuario_admin = $_SESSION['tipousuario'];
    if ($usuario_admin == 3) {
        return isset($usuario_admin);
    } 
}
session_start();
usuario_autenticado();