<?php
$id = $_POST['id'];

require_once  '../modelo/Data.php';
$d = new data();

$d->borrarUsuario($id);



?>
