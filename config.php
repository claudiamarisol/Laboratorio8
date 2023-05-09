<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "labo8_crud_cqcm";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Conexion Fallida: ".mysqli_connect_error());
}
?>