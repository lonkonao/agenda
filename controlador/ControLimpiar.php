<?php
require_once '../modelo/Data.php';
$ip = $_POST['txtIp'];

$d= new Data();

$d->upip($ip);
