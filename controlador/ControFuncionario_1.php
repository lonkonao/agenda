<?php
require '../modelo/Data.php';
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$mail = $_POST['txtMail'];
$estamento = $_POST['estamento'];
$id=$_GET['id'];




$d= new Data();

$d->updateFuncionario($nombre, $apellido, $mail, $estamento,$id);
//
//
//
//
header("location:  ../vista/portal.php");