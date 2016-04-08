<?php

$id = $_POST['id'];

require_once '../modelo/Data.php';
$d = new data();

if ($id == 1) {
    echo '<script language="javascript">';
    echo 'alert("No Puedes Borrar Al Super"); location.href="../vista/portal.php"';
    echo '</script>';
} else {
    $d->borrarUsuario($id);
}
?>
