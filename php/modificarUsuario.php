<?php

include("conexion.php");

$dni = $_POST["dni"];
$fec = $_POST["fecha"];
$profesion = $_POST["profesiones"];
$tipo = $_POST["tipos"];
$email = $_POST["email"];
$contraseña = $_POST["pass"];
$nom = $_POST["nombre"];
$ape = $_POST["apellidos"];
$dir = $_POST["direccion"];
$sexo = $_POST["sexo"];
$tel = $_POST["telefono"];
$img = $_FILES["foto"]["name"];
$ruta = $_FILES["foto"]["tmp_name"];
$destino = 'fotos/'.$img;
copy($ruta, $destino);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$modificar = "UPDATE usuario set dni='$dni', idProfesion='$profesion', tipo='$tipo', pass='$contraseña', correo='$email', nombre='$nom', apellidos='$ape', logo='$destino', telefono='$tel', direccion='$dir', fecNac='$fec', sexo='$sexo' WHERE dni='$dni' ";

if ($mysqli->query($modificar)) {
    echo '<script language="javascript"> alert("Se ha modificado el usuario correctamente"); window.location="../usuarios.php"; </script>';
    //header('location: indexAdmin.php');

    } else {
    echo "Error: " . $modificar . "<br>" . $mysqli->error;
    echo '<p> nombre es: '.$nom.'</p>';
}

$mysqli->close();

?>