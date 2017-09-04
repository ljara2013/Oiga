<?php
include("../modelo/conexion.php");

$user = $_POST['user'];
$pass = $_POST['pass'];

$usuario= new conexion;
$usuario->login($user,$pass);
$usuario->cerrar();
?>