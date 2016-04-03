<?php
require '../modelo/Data.php';
$anexo = $_POST['txtAnexo'];
$num = $_POST['txtNumExt'];


$d= new Data();

$d->insertAnexo($anexo, $num);


