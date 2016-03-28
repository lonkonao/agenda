<?php
require '../modelo/Data.php';
$centro = $_POST['txtCentro'];
$dir = $_POST['txtDireccion'];
$tele = $_POST['txtTelefono'];

$d= new Data();

$d->insertCentro($centro, $dir, $tele);




header("location:  ../vista/portal.php");