<?php
    $conn = new mysqli('localhost','root','','');
    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }

    //echo "<pre>";
    //var_dump ($conn->ping());
    //echo "</pre>";
?>

