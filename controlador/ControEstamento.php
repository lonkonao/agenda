<?php
require '../modelo/Data.php';
$estamento = $_POST['txtEstamento'];

$d= new Data();

$d->insertEsta($estamento);




header("location:  ../vista/portal.php");