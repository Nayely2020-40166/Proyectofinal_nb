<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $query="DELETE FROM mensajes WHERE nomensaje=$id";
    $result=mysqli_query($conn,$query);
    if (!$result){
        die ("Error");
    }
    header("location:mensajesR.php");
}

?>