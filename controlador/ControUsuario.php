<?php
require_once '../modelo/Data.php';

$nombre = $_POST['txtNombre'];
$permiso = $_POST['permiso'];
$estado = $_POST['estado'];
$editar = $_POST['editar'];
$eliminar = $_POST['eliminar'];



$d= new Data();


$d->insertUsuario($nombre, $permiso, $estado, $editar, $eliminar);






header("location:  ../vista/portal.php");

