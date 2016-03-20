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
$fun=$_GET['f'];
//
$d= new Data();
$d->updateAnexo($anexo, $numExterno);
//
$d->updateEquipo($ip, $nombre, $box, $sector, $centro, $anexo);
//
//

$idF=$d->idFuncionario($fun);

$idFP=$d->idFuncionarioPc($idF, $ip);

$d->updateFunPc($funcionario, $ip, $idFP);
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