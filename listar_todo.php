<?php

require "config.php";
//preparar la consulta sql
$sql = "SELECT * FROM estudiantes;";
//echo $sql;


$respuesta = mysqli_query($conn, $sql);


//$fila = mysqli_fetch_assoc($respuesta);

echo "<table border= '1'>";
echo "<tr>";
echo "<th>Cod.</th>";
echo "<th>Nombres</th>";
echo "<th>Apellidos</th>";
echo "<th>Edad</th>";
echo "<tr>";
while($fila = mysqli_fetch_assoc($respuesta)){
    echo "<tr>";
    echo "<td>".$fila['id_estudiante']."</td>";
    echo "<td>".$fila['nombres']."</td>";
    echo "<td>".$fila['apellidos']."</td>";
    echo "<td>".$fila['edad']."</td>";
    echo "<br>";
}


//print_r($fila);

mysqli_close($conn);
?>