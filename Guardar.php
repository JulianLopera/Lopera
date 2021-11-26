<?php

include ("ConexionLopera.php");

if (isset($_POST['signup'])){

$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$correo = $_POST['email'];
$contraseña = $_POST['password'];
$tel = $_POST['tel'];
$fecha = $_POST['date'];
$id = $_POST['id'];

$query = "INSERT INTO Datos VALUES(

    '$nombre',    
    '$apellido',
    '$correo',
    '$contraseña',
    '$tel',
    '$fecha',
    '$id'

)"; 

$result = mysqli_query($conn,$query);

if(!$result){
    die("Query failed");
}

header('Location: Index.php');

}

?>