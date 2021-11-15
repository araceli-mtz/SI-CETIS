<?php
include_once '../funciones/bd_conexion.php';

//Insertar
if($_POST['registro'] == 'nuevo'){
    //die(json_encode($_POST));

    $usuario_usuario = $_POST['user_usuario'];
    $usuario_pass = $_POST['user_pass'];
    $usuario_nombre = $_POST['user_nombre'];
    $usuario_app = $_POST['user_app'];
    $usuario_apm = $_POST['user_apm'];
    $usuario_tipousuario_id = $_POST['user_tipousuario'];
    $estatus = 1;

    $opciones = array(
        'cost' => 12
    );
    $password_hashed = password_hash($usuario_pass, PASSWORD_BCRYPT, $opciones);

    $stmta = $conn->prepare("SELECT usuario_usuario FROM usuarios where usuario_usuario = '$usuario_usuario' ");
    $stmta->execute();
    $stmta->bind_result($usuario_usuario);
    if($stmta->affected_rows){
        $existe = $stmta->fetch();
        if($existe) {
            $respuesta = array(
                'respuesta' => 'existe'
            );
        }else{
            try {
                $stmt = $conn->prepare("INSERT INTO usuarios (usuario_pass, usuario_tipousuario_id, usuario_usuario, usuario_nombre, usuario_app, usuario_apm, estatus) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sissssi", $password_hashed, $usuario_tipousuario_id, $usuario_usuario, $usuario_nombre, $usuario_app, $usuario_apm, $estatus);
                $stmt->execute();
                if($stmt->affected_rows) {
                    $respuesta = array(
                        'respuesta' => 'exitoso'
                    );
                } else {
                    $respuesta = array(
                        'respuesta' => 'error'
                    );
                }
                $stmt->close();
                $conn->close();
            } catch (Exception $e) {
                $respuesta = array(
                    'respuesta' => $e->getMessage()
                );
            }
        }
        $stmta->close();
    }

    die(json_encode($respuesta));
}