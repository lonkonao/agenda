<?php

require '../modelo/Data.php';
$ip = $_POST['txtIP'];
$nombre = 'null';
$box = 0;
$sector = 0;
$centro = 0;
$anexo = 0;





if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    $d = new Data();
//
    $d->insertIP($ip);
} else {
    echo '<script language="javascript">';
    echo 'alert("La Ip No es Valida ");location.href="../vista/admin/mantenedor.php"';
    echo '</script>';
}







