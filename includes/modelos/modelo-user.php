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

if($_POST['registro'] == 'editar'){
    //die(json_encode($_POST));

    $usuario_id = $_POST['user_id'];

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

    try {
        if(empty($usuario_pass)){
            $stmt = $conn->prepare("UPDATE usuarios SET usuario_nombre = ?, usuario_app = ?, usuario_apm = ?, usuario_tipousuario_id = ?, estatus = ?, usuario_editado = NOW() WHERE usuario_id = ? ");
            $stmt->bind_param("sssiii", $usuario_nombre, $usuario_app, $usuario_apm, $usuario_tipousuario_id, $estatus, $usuario_id);
            $stmt->execute();
            if($stmt->affected_rows){
                $respuesta = array(
                    'respuesta' => 'exitoso'
                );
            }else{
                $respuesta = array(
                    'respuesta' => 'error'
                );
            }
        } else {
            $stmt = $conn->prepare("UPDATE usuarios SET usuario_pass = ?, usuario_nombre = ?, usuario_app = ?, usuario_apm = ?, usuario_tipousuario_id = ?, estatus = ?, usuario_editado = NOW() WHERE usuario_id = ? ");
            $stmt->bind_param("ssssiii", $password_hashed, $usuario_nombre, $usuario_app, $usuario_apm, $usuario_tipousuario_id, $estatus, $usuario_id);
            $stmt->execute();
            if($stmt->affected_rows){
                $respuesta = array(
                    'respuesta' => 'exitoso'
                );
            }else{
                $respuesta = array(
                    'respuesta' => 'error'
                );
            }
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }
    die(json_encode($respuesta));

}

if($_POST['registro'] == 'eliminar'){
    //die(json_encode($_POST));
    $usuario_id = $_POST['id'];

    try {
        $stmt = $conn->prepare("UPDATE usuarios SET estatus = 0, usuario_editado = NOW() WHERE usuario_id = ? ");
        $stmt->bind_param("i", $usuario_id);
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta' => 'exitoso'
            );
        }else{
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
    die(json_encode($respuesta));
}
