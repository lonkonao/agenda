<?php

require_once '../modelo/Data.php';

$id=$_GET['id'];
$nombre = $_POST['txtNombre'];
$permiso = $_POST['permiso'];

$estado = $_POST['estado'];
$editar = $_POST['editar'];
$eliminar = $_POST['eliminar'];
$centro = $_POST['centro'];



$d = new Data();



$d->upUser($id, $nombre, $permiso, $estado, $editar, $eliminar, $centro);



