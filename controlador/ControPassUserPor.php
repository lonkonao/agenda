<?php
require_once '../modelo/Data.php';


$usuario =$_POST['usuario'];
$pass=$_POST['pass'];



$pass1 = md5($pass);

$d = new Data();

$d->upPassUserPor($usuario, $pass1);





