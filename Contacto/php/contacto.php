<?php
require_once "conection.php";
$asunto=$_POST['asunto'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

$obj = new connection();
$con = $obj->connect();
$instruction_sql = "INSERT INTO contacto (asunto, email, mensaje)
values ('{$asunto}', '{$email}', '{$mensaje}')";
$result = $con->prepare($instruction_sql);
$result->execute();

echo "Los datos del usuario {$email} fueron procesados satisfactoriamente.";
?>