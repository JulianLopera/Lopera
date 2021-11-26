<?php

session_start();

$conn = mysqli_connect(

    'localhost',
    'root',
    '',
    'j-lopera-'

) or die (mysqli_error($mysqli));
if(isset($conn)){
    echo 'base de datos conectada';
}

?>