<?php

require_once '../modelo/Data.php';
require_once '../modelo/Usuario.php';

$usuario = $_POST["txtUser"];
$pass = $_POST['txtPass'];


$passwords = md5($pass);
$d = new Data();


$us = $d->existeUsuario($usuario, $passwords);



if ($us == null) {

    header("location: ../index.php?e=1");
} else {
    $usNom = $us->user;
    $usPer = $us->permiso;
    $usEs = $us->estado;
    $usEdi = $us->editar;
    $usEli = $us->eliminar;
    $usCen=$us->centro;

    session_start();
    $_SESSION["autenticado"] = "SI";
    $_SESSION["nombreUser"]=$usNom;
    $_SESSION["permisoUser"]=$usPer;
    $_SESSION["estadoUser"]=$usEs;
    $_SESSION["editUser"]=$usEdi;
    $_SESSION["eliUser"]=$usEli;
    $_SESSION["cenUser"]=$usCen;
    
    header("location: ../vista/portal.php");
}
?>