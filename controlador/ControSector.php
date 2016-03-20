<?php
require '../modelo/Data.php';
$sector = $_POST['txtSector'];

$d= new Data();

$d->insertSector($sector);




header("location:  ../vista/portal.php");