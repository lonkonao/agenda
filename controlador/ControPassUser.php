<?php
require_once '../modelo/Data.php';

$id=$_POST['id'];
$usuario =$_POST['usuario'];
$pass=$_POST['pass'];



$pass1 = md5($pass);

$d = new Data();

$d->upPassUser($id, $pass1);





