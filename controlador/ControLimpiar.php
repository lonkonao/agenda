<?php
require_once '../modelo/Data.php';
$ip = $_POST['id'];

$d= new Data();

$d->upip($ip);
