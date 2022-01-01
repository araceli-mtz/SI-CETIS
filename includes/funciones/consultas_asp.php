<?php
$sql_asp = 
"SELECT 
usuario_usuario, usuario_nombre, usuario_app, usuario_apm, asp_id, 
asp_fnac, asp_sexo, asp_correo, asp_tel, asp_cel, fecha_registro,
asp_dir_cp, asp_dir_edo, asp_dir_mpio, asp_dir_col, asp_dir_calle, asp_dir_num,
sec_clave, sec_nombre, sec_tipoesc, sec_tiposost, sec_edo, sec_mpio, sec_loc, sec_dir, sec_tel, 
tutor_curp, tutor_nombre, tutor_app, tutor_apm, tutor_ocup, tutor_tel, tutor_cel,
op1, op2, op3
FROM 
aspirantes 
INNER JOIN usuarios ON aspirantes.asp_id_usuario = usuarios.usuario_id 
INNER JOIN secundarias ON aspirantes.asp_id_sec = secundarias.sec_clave
INNER JOIN tutores ON aspirantes.asp_id_tutor = tutores.tutor_curp
WHERE usuario_usuario = '$usuario' ";

$asp_detalle = $conn->query($sql_asp);
$aspirante = $asp_detalle->fetch_assoc();

$date = $aspirante['fecha_registro'];

$asp_op1 = $aspirante['op1'];
$asp_op2 = $aspirante['op2'];
$asp_op3 = $aspirante['op3'];


//Especialidad 1
$sql_asp_op1 = "SELECT esp_nombre FROM especialidades WHERE esp_id = $asp_op1 ";
$esp1 = $conn->query($sql_asp_op1);
$especialidad1 = $esp1->fetch_assoc();
$especialidad_op1 = strtoupper($especialidad1['esp_nombre']);

//Especialidad 2
$sql_asp_op2 = "SELECT esp_nombre FROM especialidades WHERE esp_id = $asp_op2 ";
$esp2 = $conn->query($sql_asp_op2);
$especialidad2 = $esp2->fetch_assoc();
$especialidad_op2 = strtoupper($especialidad2['esp_nombre']);

//Especialidad 2
$sql_asp_op3 = "SELECT esp_nombre FROM especialidades WHERE esp_id = $asp_op3 ";
$esp3 = $conn->query($sql_asp_op3);
$especialidad3 = $esp3->fetch_assoc();
$especialidad_op3 = strtoupper($especialidad3['esp_nombre']);

//Tipo escuela
if($aspirante['sec_tipoesc'] == 1){
    $tipoesc = 'SECUNDARIA GENERAL';
}else if ($aspirante['sec_tipoesc'] == 2){
    $tipoesc = 'SECUNDARIA TÉCNICA';
}else if ($aspirante['sec_tipoesc'] == 3){
    $tipoesc = 'TELESECUNDARIA';
}else if ($aspirante['sec_tipoesc'] == 4){
    $tipoesc = 'PARTICULAR';
}else {
    $tipoesc = 'OTRO';
}

//Tipo Sostenimiento
if($aspirante['sec_tiposost'] == 1){
    $tiposost = 'FEDERAL';
}else if ($aspirante['sec_tiposost'] == 2){
    $tiposost = 'ESTATAL';
}else if ($aspirante['sec_tiposost'] == 3){
    $tiposost = 'PARTICULAR';
}
?>