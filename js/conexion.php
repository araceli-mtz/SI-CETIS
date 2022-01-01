<?php
$mysql = mysqli_connect("localhost", "root", "", "cetis145_");
if($mysql){
    echo 'Si';
} else {
    echo 'NO';
}
?>