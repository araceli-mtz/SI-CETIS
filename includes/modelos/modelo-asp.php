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
    $estatus_proceso = 1;

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
                                    $stmt_sec_nuevo->bind_param("ssiisssssi", $sec_clave, $sec_nombre, $sec_tipoesc, $sec_tiposost, $sec_edo, $sec_mpio, $sec_loc, $sec_dir, $sec_tel, $estatus);
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

                    /*Consultar Id Usuario-Aspirante*/
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
                        $stmt_asp_nuevo = $conn->prepare("INSERT INTO aspirantes (asp_fnac, asp_sexo, asp_correo, asp_tel, asp_cel, asp_dir_cp, asp_dir_edo, asp_dir_mpio, asp_dir_col, asp_dir_calle, asp_dir_num, asp_id_usuario, asp_id_sec, asp_id_tutor, estatus, op1, op2, op3, estatus_proceso) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                        $stmt_asp_nuevo->bind_param("sisssssssssissiiiii", $asp_fnac, $asp_sexo, $asp_correo, $asp_tel, $asp_cel, $asp_dir_cp, $asp_dir_edo, $asp_dir_mpio, $asp_dir_col, $asp_dir_calle, $asp_dir_num, $id_insertado, $sec_clave, $tutor_curp, $estatus, $op1, $op2, $op3, $estatus_proceso);
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

if ($_POST['registro'] == 'actualizar'){
    //die(json_encode($_POST));
    $asp_curp = $_POST['asp_curp'];
    $asp_nombre = $_POST['asp_nombre'];
    $asp_app = $_POST['asp_apm'];
    $asp_apm = $_POST['asp_app'];

    $asp_id = $_POST['asp_id'];
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
    $estatus_proceso = 2;
    

    try {
        $stmt = $conn->prepare("UPDATE usuarios SET usuario_nombre = ?, usuario_app = ?, usuario_apm = ?, usuario_editado = NOW() WHERE usuario_usuario = ? ");
        $stmt->bind_param("ssss", $asp_nombre, $asp_apm, $asp_app, $asp_curp);
        $stmt->execute();
        if($stmt->affected_rows){
            /*Edita Info Aspirante */
            try {
                $stmt1 = $conn->prepare("UPDATE aspirantes SET asp_fnac = ?, asp_sexo = ?, asp_correo = ?, asp_tel = ?, asp_cel = ?, asp_dir_cp = ?, asp_dir_edo = ?, asp_dir_mpio = ?, asp_dir_col = ?, asp_dir_calle = ?, asp_dir_num = ?, estatus_proceso = ?  WHERE asp_id = ? ");
                $stmt1->bind_param("sssssssssssii", $asp_fnac, $asp_sexo, $asp_correo, $asp_tel, $asp_cel, $asp_dir_cp, $asp_dir_edo, $asp_dir_mpio, $asp_dir_col, $asp_dir_calle, $asp_dir_num, $estatus_proceso, $asp_id);
                $stmt1->execute();
                if($stmt1->affected_rows){
                    /*Edita Info Aspirante */
                    $respuesta = array('respuesta' => 'aspirante_verificado');
                }else{
                    $respuesta = array(
                        'respuesta' => 'error'
                    );
                }
            } catch (Exception $e) {
                $respuesta = array(
                    'respuesta' => $e->getMessage()
                );
            }
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

if ($_POST['registro'] == 'actualizar_estatus'){
    //die(json_encode($_POST));
    $asp_id = $_POST['id'];
    $estatus_proceso = 3;

    try {
        $stmt = $conn->prepare("UPDATE aspirantes SET estatus_proceso = ? WHERE asp_id = ? ");
        $stmt->bind_param("ii", $estatus_proceso, $asp_id,);
        $stmt->execute();
        if($stmt->affected_rows){
            //$respuesta = array('respuesta' => 'exitoso'); 
            try {
                //Folio anterior
                $stmt_ultimaficha = $conn->prepare("SELECT no_ficha FROM fichas ORDER BY id_ficha DESC LIMIT 1");
                $stmt_ultimaficha->execute();
                $stmt_ultimaficha->bind_result($ultima_ficha);
                $stmt_ultimaficha->fetch();
                $ultima_ficha1 = intval($ultima_ficha);
                $stmt_ultimaficha->close();

                //Aula anterior
                $stmt_ultima_aula = $conn->prepare("SELECT aula FROM fichas ORDER BY id_ficha DESC LIMIT 1");
                $stmt_ultima_aula->execute();
                $stmt_ultima_aula->bind_result($ultima_aula);
                $stmt_ultima_aula->fetch();
                $ultima_aula1 = intval($ultima_aula);
                $stmt_ultima_aula->close();

                //Definir numero de alumnos por aula
                if($ultima_ficha1 % 40 == 0){
                    $sig_aula = $ultima_aula1+1;
                }else{
                    $sig_aula = $ultima_aula1;
                }
                

                if(isset($ultima_ficha1)){
                    $sig_ficha = $ultima_ficha1+1;
                    
                    try {
                        $stmt_ficha = $conn->prepare("INSERT INTO fichas (no_ficha, asp_id, aula) VALUES (?, ?, ?)");
                        $stmt_ficha->bind_param("iii",$sig_ficha, $asp_id, $sig_aula);
                        $stmt_ficha->execute();
                        if($stmt_ficha->affected_rows) {
                            $respuesta = array('respuesta' => 'exitoso'); 
                        } else {
                            $respuesta = array(
                                'respuesta' => 'error'
                            );
                        }
                        $stmt_ficha->close();
                    } catch (Exception $e) {
                        $respuesta = array(
                            'respuesta' => $e->getMessage()
                        );
                    } 
                }
            } catch (Exception $e) {
                $respuesta = array(
                    'respuesta' => $e->getMessage()
                );
            }  
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