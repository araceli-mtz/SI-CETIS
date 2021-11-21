<?php
include_once '../funciones/bd_conexion.php';

//Insertar
if($_POST['registro'] == 'nuevo'){
    //die(json_encode($_POST));

    $esp_descripcion = $_POST['esp_descripcion'];
    $esp_nombre = $_POST['esp_nombre'];
    $estatus = 1;

    try {
        $stmt = $conn->prepare("INSERT INTO especialidades (esp_nombre, esp_descripcion, estatus, esp_editado) VALUES (?, ?, ?, NOW())");
        $stmt->bind_param("ssi", $esp_nombre, $esp_descripcion, $estatus);
        $stmt->execute();
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'esp_exitoso'
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

    die(json_encode($respuesta));
}


if($_POST['registro'] == 'editar'){
    //die(json_encode($_POST));
    $esp_id = $_POST['esp_id'];
    $esp_nombre = $_POST['esp_nombre'];
    $esp_descripcion = $_POST['esp_descripcion'];
    $estatus = $_POST['esp_estatus'];

    try {
        $stmt = $conn->prepare("UPDATE especialidades SET esp_nombre = ?, esp_descripcion = ?, estatus = ?, esp_editado = NOW() WHERE esp_id = ? ");
        $stmt->bind_param("ssii", $esp_nombre, $esp_descripcion, $estatus, $esp_id);
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

if($_POST['registro'] == 'eliminar'){
    //die(json_encode($_POST));
    $esp_id = $_POST['id'];

    try {
        $stmt = $conn->prepare("UPDATE especialidades SET estatus = 0, esp_editado = NOW() WHERE esp_id = ? ");
        $stmt->bind_param("i", $esp_id);
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


