<?php
require_once '../modelo/Data.php';

$id=$_POST['id'];




$d = new Data();



$d->borrarUsuario($id);



