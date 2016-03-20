<?php
require '../modelo/Data.php';
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$mail = $_POST['txtMail'];
$estamento = $_POST['estamento'];

$d= new Data();

$d->insertFuncionario($nombre, $apellido, $mail, $estamento);




header("location:  ../vista/portal.php");