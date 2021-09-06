<?php

$user = $_POST['user'];
$pass = $_POST['pass'];
$contador = 3;

if ($user == "" and $pass == "") {
    echo '<script language="javascript">';
    echo 'alert("No hay datos. Error No.")';
    echo '</script>';

    $contador++;
}elseif ($user == "admin" and $pass == "mensajes"){
    header("Location:mensajesR.php");
}elseif ($user !== "admin" or $pass !== "mensajes") {
    echo '<script language="javascript">';
    echo 'alert("Usuario y/o contraseña incorrectas")';
    echo '</script>';
    $contador++;
}
    
if ($contador == 3) {
    echo '<script language="javascript">';
    echo 'alert("Adios")';
    echo '</script>';
}
?>