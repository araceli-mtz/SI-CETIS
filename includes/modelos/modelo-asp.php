<?php
include_once '../funciones/bd_conexion.php';

//Insertar
if($_POST['registro'] == 'nuevo'){

    $asp_curp = $_POST['asp_curp'];
    $usuario_tipousuario_id = 3;
    $asp_nombre = $_POST['asp_nombre'];
    $asp_app = $_POST['asp_apm'];
    $asp_apm = $_POST['asp_app'];
    $estatus = 1;

    $sec_clave = $_POST['sec_clave'];
    
    /*Verificar si existe registro de aspirante*/ 
    $stmt_asp = $conn->prepare("SELECT usuario_usuario FROM usuarios where usuario_usuario = '$asp_curp' ");
    $stmt_asp->execute();
    $stmt_asp->bind_result($asp_curp);
    if($stmt_asp->affected_rows){
        $existe = $stmt_asp->fetch();
        if($existe) {
            /*Rediregir aspirante a inicio de sesión*/
            $respuesta = array(
                'respuesta' => 'existe_asp'
            );
        }else{
            /*Si aspirante no existe, crear usuario para aspirante*/
            try {
                $stmt_user = $conn->prepare("INSERT INTO usuarios (usuario_tipousuario_id, usuario_usuario, usuario_nombre, usuario_app, usuario_apm, estatus) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt_user->bind_param("issssi", $usuario_tipousuario_id, $asp_curp, $asp_nombre, $asp_app, $asp_apm, $estatus);
                $stmt_user->execute();
                if($stmt_user->affected_rows) {
                    try {
                    /*Verificar si existe registro de secundaria*/ 
                    $stmt_sec = $conn->prepare("SELECT sec_clave FROM secundarias where sec_clave = '$sec_clave' ");
                    $stmt_sec->execute();
                    $stmt_sec->bind_result($sec_clave);
                    if($stmt_sec->affected_rows){
                        $existe_sec = $stmt_sec->fetch();
                        if($existe_sec) {
                            //Editar sec o tomar el valor
                            $respuesta = array(
                                'respuesta' => 'existe_sec_editar'
                            );
                        }else{
                            /*Si secundaria no existe, crear secundaria*/
                            $respuesta = array(
                                'respuesta' => 'no_existe_sec_crear'
                            );
                        }
                        $stmt_sec->close();
                    } else {}
                    } catch (Exception $e) {
                        $respuesta = array(
                            'respuesta' => $e->getMessage()
                        );
                    }
                } else {
                    $respuesta = array(
                        'respuesta' => 'error'
                    );
                }
                $stmt_user->close();
                $conn->close();
            } catch (Exception $e) {
                $respuesta = array(
                    'respuesta' => $e->getMessage()
                );
            }
        }
        $stmt_asp->close();
    } else {

    }

    die(json_encode($respuesta));
}


