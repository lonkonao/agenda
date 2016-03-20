<?php
require_once '../modelo/Data.php';
$ip = $_POST['txtIp'];
$nombre = $_POST['txtNombre'];
$box = $_POST['box'];
$sector = $_POST['sector'];
$centro = $_POST['centro'];
$anexo = $_POST['txtAnexo'];
$numExterno = $_POST['txtnum'];
$funcionario = $_POST['funcionario'];


$d= new Data();
$d->insertAnexo($anexo, $numExterno);

$d->insertEquipo($ip, $nombre, $box, $sector, $centro, $anexo);
$d->insertFuncioPc($funcionario, $ip);


//$d2= new Data();
//$d2->insertAnexo($anexo, $numExterno);
//
//


header("location:  ../vista/portal.php");

//echo "ip ".$ip;
//echo "<br>";
//echo "$nombre ".$nombre;
//echo "<br>";
//echo "box ".$box;
//echo "<br>";
//echo "sector ".$sector;
//echo "<br>";
//echo "centro ".$centro;
//echo "<br>";
//echo "anexo ".$anexo;
//echo "<br>";
//echo "num ".$numExterno;