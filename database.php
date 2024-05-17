<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gditm";

$conexion = new mysqli($servername, $username, $password, $dbname);

if ($conexion->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}else{
    echo "";
}
?>