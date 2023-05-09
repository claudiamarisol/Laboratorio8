<?php
require "config.php";
//asignando tados a la variable
$nombre = "Luz Natalia";
$apellidos = "Parada Mamani";
$edad = "25";

//preparar la consulta sql
$sql = "INSERT INTO estudiantes VALUES (null, '$nombre', '$apellidos', $edad);";
echo $sql;


$respuesta = mysqli_query($conn, $sql);
echo $respuesta;



if($respuesta){
echo "REGISTRO CREADO EXITOSAMENTE.";
}else{
    echo "error al crear el registro". mysqli_error();
}
mysqli_close($conn);
?>