<?php
include_once '../funciones/bd_conexion.php';
//Insertar
if($_POST['registro'] == 'editar'){
    //die(json_encode($_POST));
    $pago_concepto = $_POST['pago_concepto'];
    $pago_importe = $_POST['pago_importe'];
    $pago_banco = $_POST['pago_banco'];
    $pago_cuenta = $_POST['pago_cuenta'];
    $pago_clabe = $_POST['pago_clabe'];
    $pago_lugar = $_POST['pago_lugar'];

    try {
        $stmt = $conn->prepare("UPDATE pagos SET pago_concepto = ?, pago_importe = ?, pago_banco = ?, pago_cuenta = ?, pago_clabe = ?, pago_lugar = ?, pago_editado = NOW() WHERE id_pago = 1 ");
        $stmt->bind_param("sdssss", $pago_concepto, $pago_importe, $pago_banco, $pago_cuenta, $pago_clabe, $pago_lugar);
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

?>