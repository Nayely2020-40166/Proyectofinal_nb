<?php
include("conexion.php");

if (isset($_POST['guardar'])) {
    $nomensaje=$_POST['nomensaje'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];
   

    $query="INSERT INTO mensajes (nomensaje,nombre,telefono,correo,mensaje) VALUES ('$nomensaje','$nombre','$telefono','$correo','$mensaje')";
    $result=mysqli_query($conn, $query);
    if (!$result){
        die ("Error");
    }
    header("location:contactenos.php");
}

?>