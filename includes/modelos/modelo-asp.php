<?php
include_once '../funciones/bd_conexion.php';

//Insertar
if ($_POST['registro'] == 'nuevo') {

    $asp_curp = $_POST['asp_curp'];
    $usuario_tipousuario_id = 3;
    $asp_nombre = $_POST['asp_nombre'];
    $asp_app = $_POST['asp_apm'];
    $asp_apm = $_POST['asp_app'];

    $sec_clave = $_POST['sec_clave'];
    $sec_nombre = $_POST['sec_nombre'];
    $sec_tipoesc = $_POST['sec_tipoesc'];
    $sec_tiposost = $_POST['sec_tiposost'];
    $sec_edo = $_POST['sec_edo'];
    $sec_mpio = $_POST['sec_mpio'];
    $sec_loc = $_POST['sec_loc'];
    $sec_dir = $_POST['sec_dir'];
    $sec_tel = $_POST['sec_tel'];

    $tutor_curp = $_POST['tutor_curp'];
    $tutor_nombre = $_POST['tutor_nom'];
    $tutor_app = $_POST['tutor_app'];
    $tutor_apm = $_POST['tutor_apm'];
    $tutor_ocup = $_POST['tutor_ocup'];
    $tutor_tel = $_POST['tutor_tel'];
    $tutor_cel = $_POST['tutor_cel'];

    $asp_fnac = $_POST['date'];
    $asp_sexo = $_POST['asp_sexo'];
    $asp_correo = $_POST['asp_correo'];
    $asp_tel = $_POST['asp_tel_fijo'];
    $asp_cel = $_POST['asp_tel_movil'];
    $asp_dir_cp = $_POST['dom_cp'];
    $asp_dir_edo = $_POST['dom_edo'];
    $asp_dir_mpio = $_POST['dom_mpio'];
    $asp_dir_col = $_POST['dom_col'];
    $asp_dir_calle = $_POST['dom_calle'];
    $asp_dir_num = $_POST['dom_num'];

    $op1 = $_POST['esp_op1'];
    $op2 = $_POST['esp_op2'];
    $op3 = $_POST['esp_op3'];

    $estatus = 1;

    /*Verificar si existe registro de aspirante*/
    $stmt_asp = $conn->prepare("SELECT usuario_usuario FROM usuarios where usuario_usuario = '$asp_curp' ");
    $stmt_asp->execute();
    $stmt_asp->bind_result($asp_curp_1);
    if ($stmt_asp->affected_rows) {
        $existe = $stmt_asp->fetch();
        
        if ($existe) {
            /*Rediregir aspirante a inicio de sesión*/
            $respuesta = array('respuesta' => 'existe_asp');
        } else {
            /*Si aspirante no existe, crear usuario para aspirante*/
            try {
                $stmt_user = $conn->prepare("INSERT INTO usuarios (usuario_tipousuario_id, usuario_usuario, usuario_nombre, usuario_app, usuario_apm, estatus) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt_user->bind_param("issssi", $usuario_tipousuario_id, $asp_curp, $asp_nombre, $asp_app, $asp_apm, $estatus);
                $stmt_user->execute();

                if ($stmt_user->affected_rows) {

                    /*Registro de Secundaria */
                    try {
                        /*Verificar si existe registro de secundaria*/
                        $stmt_sec = $conn->prepare("SELECT sec_clave FROM secundarias where sec_clave = '$sec_clave' ");
                        $stmt_sec->execute();
                        $stmt_sec->bind_result($sec_clave);
                        if ($stmt_sec->affected_rows) {
                            $existe_sec = $stmt_sec->fetch();

                            if ($existe_sec) {
                                //Editar sec o tomar el valor
                                //$respuesta = array('respuesta' => 'existe_sec_editar','clave' => $sec_clave);
                            } else { 
                                /*Si secundaria no existe, crear secundaria*/
                                //$respuesta = array('respuesta' => 'no_existe_sec_crear', 'clave' => $sec_clave);
                                try {
                                    $stmt_sec_nuevo = $conn->prepare("INSERT INTO secundarias (sec_clave, sec_nombre, sec_tipoesc, sec_tiposost, sec_edo, sec_mpio, sec_loc, sec_dir, sec_tel, estatus) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                                    $stmt_sec_nuevo->bind_param("ssiiiisssi", $sec_clave, $sec_nombre, $sec_tipoesc, $sec_tiposost, $sec_edo, $sec_mpio, $sec_loc, $sec_dir, $sec_tel, $estatus);
                                    $stmt_sec_nuevo->execute();
                                    if($stmt_sec_nuevo->affected_rows) {
                                        //$respuesta = array('respuesta' => 'secundaria_insertada');
                                    } else {
                                        $respuesta = array('respuesta' => 'secundaria_NO_insertada');
                                    }
                                    $stmt_sec_nuevo->close();
                                    
                                } catch (Exception $e) {
                                    $respuesta = array('respuesta' => $e->getMessage());
                                }
                                
                            }
                            $stmt_sec->close();

                        } else { }
                    } catch (Exception $e) {
                        $respuesta = array(
                            'respuesta' => $e->getMessage()
                        );
                    }

                    /*Consultar id Aspirante*/
                    try {
                        /*Verificar si existe registro de secundaria*/
                        $stmt_aspid = $conn->prepare("SELECT usuario_id FROM usuarios where usuario_usuario = '$asp_curp' ");
                        $stmt_aspid->execute();
                        $stmt_aspid->bind_result($id_usuario);
                        if ($stmt_aspid->affected_rows) {
                            $existe_aspid = $stmt_aspid->fetch();

                            $id_insertado = $id_usuario;
                            $stmt_aspid->close();

                        } else { }
                    } catch (Exception $e) {
                        $respuesta = array(
                            'respuesta' => $e->getMessage()
                        );
                    }

                    /*Registro de Tutor */
                    try {
                        /* Verificar si existe registro de tutor */
                        $stmt_tutor = $conn->prepare("SELECT tutor_curp FROM tutores where tutor_curp = '$tutor_curp' ");
                        $stmt_tutor->execute();
                        $stmt_tutor->bind_result($tutor_curp);
                        if ($stmt_tutor->affected_rows) {
                            $existe_tutor = $stmt_tutor->fetch();
                            if ($existe_tutor) {
                                //Editar tutor o tomar el valor
                                //$respuesta = array('respuesta' => 'existe_tutor_editar','tutor_curp' => $tutor_curp);
                            } else { 
                                //Si tutor no existe, crear
                                //$respuesta = array('respuesta' => 'no_existe_tutor_crear', 'tutor_curp' => $tutor_curp);
                                try {
                                    $stmt_tutor_nuevo = $conn->prepare("INSERT INTO tutores (tutor_curp, tutor_nombre, tutor_app, tutor_apm, tutor_ocup, tutor_tel, tutor_cel, estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                                    $stmt_tutor_nuevo->bind_param("sssssssi", $tutor_curp, $tutor_nombre, $tutor_app, $tutor_apm, $tutor_ocup, $tutor_tel, $tutor_cel, $estatus);
                                    $stmt_tutor_nuevo->execute();
                                    if($stmt_tutor_nuevo->affected_rows) {
                                        //$respuesta = array('respuesta' => 'tutor_insertado', 'asp_id' => $id_insertado);
                                    } else {
                                        //$respuesta = array('respuesta' => 'tutor_NO_insertada');
                                    }
                                    $stmt_tutor_nuevo->close();
                                    
                                } catch (Exception $e) {
                                    $respuesta = array('respuesta' => $e->getMessage());
                                }

                            }
                            $stmt_tutor->close();
                            
                        } else { }
                    } catch (Exception $e) {
                        $respuesta = array(
                            'respuesta' => $e->getMessage()
                        );
                    }

                    /*Crear Aspirante*/
                    try {
                        $stmt_asp_nuevo = $conn->prepare("INSERT INTO aspirantes (asp_fnac, asp_sexo, asp_correo, asp_tel, asp_cel, asp_dir_cp, asp_dir_edo, asp_dir_mpio, asp_dir_col, asp_dir_calle, asp_dir_num, asp_id_usuario, asp_id_sec, asp_id_tutor, estatus, op1, op2, op3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                        $stmt_asp_nuevo->bind_param("sissssiisssissiiii", $asp_fnac, $asp_sexo, $asp_correo, $asp_tel, $asp_cel, $asp_dir_cp, $asp_dir_edo, $asp_dir_mpio, $asp_dir_col, $asp_dir_calle, $asp_dir_num, $id_insertado, $sec_clave, $tutor_curp, $estatus, $op1, $op2, $op3);
                        $stmt_asp_nuevo->execute();
                        if($stmt_asp_nuevo->affected_rows) {
                            $respuesta = array('respuesta' => 'aspirante_insertado');
                        } else {
                            $respuesta = array('respuesta' => 'aspirante_NO_insertado');
                        }
                        $stmt_asp_nuevo->close();
                        
                    } catch (Exception $e) {
                        $respuesta = array('respuesta' => $e->getMessage());
                    }



                } else {
                    $respuesta = array(
                        'respuesta' => 'error'
                    );
                }
                $stmt_user->close();
                //$conn->close();
            } catch (Exception $e) {
                $respuesta = array(
                    'respuesta' => $e->getMessage()
                );
            }
        }
        $stmt_asp->close();
        $conn->close();
    }

    die(json_encode($respuesta));
}
