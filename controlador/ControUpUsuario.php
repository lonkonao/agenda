<?php

require_once '../modelo/Data.php';

$nombre = $_POST['txtNombre'];
$permiso = $_POST['permiso'];
$pass = $_POST['txtPass'];
$estado = $_POST['estado'];
$editar = $_POST['editar'];
$eliminar = $_POST['eliminar'];

$passwords = md5($pass);

$d = new Data();



$d->insertUsuario($nombre, $passwords, $permiso, $estado, $editar, $eliminar);


