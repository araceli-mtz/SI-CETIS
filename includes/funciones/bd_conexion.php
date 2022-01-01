<?php
    $conn = new mysqli('localhost','root','','cetis145');
    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }

    //echo "<pre>";
    //var_dump ($conn->ping());
    //echo "</pre>";


    /*
    <?php
$conn = new mysqli("localhost", "cetis145", "ogE1rOiHXNyX", "cetis145_");
if($conn->connect_error){
  echo $error -> $conn->connect_error;
}


if($conn){
    try {
      //Consulta usuarios
      $sql = " SELECT * FROM usuarios WHERE estatus = 1 and usuario_id > 0 and usuario_tipousuario_id < 3 ";
      $resultado = $conn->query($sql);
    } catch (\Exception $e) {
      echo $e->getMessage();
    }
  
  while($usuario = $resultado->fetch_assoc() ) {
    echo $usuario['usuario_usuario'];
  }
} else {
    echo 'NO';
}


?>
    */
?>

