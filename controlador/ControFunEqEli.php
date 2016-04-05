<?php
require_once '../modelo/Data.php';
$ip = $_POST['comboIP'];
$funcionario = $_POST['funcionario'];


$d= new Data();

$d->insertFuncioPc($funcionario, $ip);

