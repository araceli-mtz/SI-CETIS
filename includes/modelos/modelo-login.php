<?php
include_once '../funciones/bd_conexion.php';

//Login
if($_POST['registro'] == 'login'){
    //die(json_encode($_POST));

    $usuario = $_POST['usuario_id'];
    $password = $_POST['usuario_pass'];

    try {
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario_usuario = ?;");
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $stmt->bind_result($usuario_id, $usuario_pass, $usuario_tipousuario_id, $usuario_usuario, $usuario_nombre, $usuario_app, $usuario_apm, $usuario_editado, $estatus);

        if($stmt->affected_rows){
            $existe = $stmt->fetch();
            if($existe) {
                if(password_verify($password, $usuario_pass)) {
                    session_start();
                    $_SESSION['usuario'] = $usuario_usuario;
                    $_SESSION['nombre'] = $usuario_nombre;

                    $respuesta = array(
                        'respuesta' => 'exitoso',
                        'tipousuario' => $usuario_tipousuario_id,
                        'nombre' => $usuario_nombre
                    );
                } else {
                    $respuesta = array(
                        'respuesta' => 'error'
                    );
                }
            }else{
                $respuesta = array(
                    'respuesta' => 'error'
                );
            }
            $stmt->close();
            $conn->close();
        }
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }

    die(json_encode($respuesta));
}



