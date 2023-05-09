<?php
require "config.php";
//variable ID
$id = 6;

//preparar la consulta sql
$sql = "DELETE FROM estudiantes WHERE id_estudiante = $id";
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