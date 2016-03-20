<?php
require '../modelo/Data.php';
$box = $_POST['txtBox'];

$d= new Data();

$d->insertBox($box);




//header("location:  ../vista/portal.php");