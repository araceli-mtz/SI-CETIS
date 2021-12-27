<?php

include_once '../funciones/bd_conexion.php';

if($_POST['registro'] == 'editar'){
    //die(json_encode($_POST));
    $id_periodo = intval($_POST['id_periodo']);
    $fecha_inicio = $_POST['fecha-inicio'];
    $fecha_fin = $_POST['fecha-fin'];

    try {
        $stmt_periodo = $conn->prepare("UPDATE periodo SET fecha_inicio = ?, fecha_fin = ?, editado = NOW() WHERE id_periodo = ? ");
        $stmt_periodo->bind_param("ssi", $fecha_inicio, $fecha_fin, $id_periodo);
        $stmt_periodo->execute();
        if($stmt_periodo->affected_rows){
            $respuesta = array(
                'respuesta' => 'exitoso'
            );
        }else{
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt_periodo->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }
    die(json_encode($respuesta));
}