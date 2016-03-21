<?php
require_once '../modelo/Data.php';

$nombre = $_POST['txtNombre'];

$sector = $_POST['sector'];
$centro = $_POST['centro'];
$anexo = $_POST['txtAnexo'];
$numExterno = $_POST['txtnum'];
$funcionario = $_POST['funcionario'];


$d= new Data();
$d->insertAnexo($anexo, $numExterno);

$d->insertEquipo($ip, $nombre, $box, $sector, $centro, $anexo);
$d->insertFuncioPc($funcionario, $ip);





header("location:  ../vista/portal.php");

