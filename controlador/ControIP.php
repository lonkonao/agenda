<?php

require '../modelo/Data.php';
$ip = $_POST['txtIP'];




if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  $d = new Data();
//
    $d->insertIP($ip);
    
    
    header("location: google.cl");
} else {

   echo '<script language="text/javascript">';
            echo 'alert("IP No Valida"); document.location.href="../vista/admin/mantenedor.php"';
            echo '</script>';
}







