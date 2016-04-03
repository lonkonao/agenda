<?php

require '../modelo/Data.php';
$ip = $_POST['txtIP'];




if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
//    $d = new Data();
//
//    $d->insertCentro($centro, $dir, $tele);
    
    
    header("location: google.cl");
} else {
//    echo '<script language="javascript">';
//            echo 'alert("Ip No valida")'; 
//            echo '</script>';
//   
//   header("Location: ../vista/admin/mantenedor.php?i=".$ip);
    
   echo '<script language="text/javascript">';
            echo 'alert("IP No Valida"); document.location.href="../vista/admin/mantenedor.php"';
            echo '</script>';
}







