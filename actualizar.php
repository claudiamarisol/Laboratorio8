<?php
require "config.php";
//asignando tados a la variable
$nombre = "EVER";
$apellidos = "QUISPE";
$edad = "20";
//variable ID
$id = 6;

//preparar la consulta sql
$sql = "UPDATE estudiantes SET nombres = '$nombre', apellidos =  '$apellidos', edad = $edad WHERE id_estudiante = $id;";
echo $sql;


$respuesta = mysqli_query($conn, $sql);
echo $respuesta;



if($respuesta){
echo "REGISTRO ACTUALIZADO EXITOSAMENTE.";
}else{
    echo "error al crear el registro". mysqli_error();
}
mysqli_close($conn);
?>