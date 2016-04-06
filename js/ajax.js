function objetoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}


function Registrar(accion) {


    ip = document.frmRegistro.ip.value;
    nombre = document.frmRegistro.nombre.value;
    box = document.frmRegistro.box.value;
    sector = document.frmRegistro.sector.value;
    edificio = document.frmRegistro.edificio.value;
    anexo = document.frmRegistro.anexo.value;
    numero = document.frmRegistro.numero.value;

    ajax = objetoAjax();

    if (accion == 'N') {

        ajax.open("POST", "ControReg.php", true);
    } else if (accion == 'E') {
        ajax.open("POST", "ControActu.php", true);
    }
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            alert('Los datos fueron guardados con exito!');
            window.location.reload(true);
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ip=" + ip + "&nombre=" + nombre + "&box=" + box + "&sector=" + sector + "&edificio=" + edificio + "&anexo=" + anexo + "&numero=" + numero);
}



function Eliminar(id) {
    if (confirm("En realidad desea eliminar este Usuario?")) {
        ajax = objetoAjax();
        ajax.open("POST", "../../controlador/ControEliUser.php", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                alert('El registro fue eliminado con exito!');
                window.location.reload(true);
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send("id=" + id)
    } else {
        //Sin acciones
    }

}
function Desasociar(id) {
    if (confirm("En realidad deseas Desasociar?")) {
        ajax = objetoAjax();
        ajax.open("POST", "../../controlador/ControFunEqEli.php", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                alert('El registro fue eliminado con exito!');
                window.location.reload(true);
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send("id=" + id)
    } else {
        //Sin acciones
    }

}





function PassUser(id, usuario, pass1, pass2) {



    id = document.frmPass.id.value;
    usuario = document.frmPass.usuario.value;
    pass1 = document.frmPass.pass1.value;
    pass2 = document.frmPass.pass2.value;



    ajax = objetoAjax();
    if (pass1 == pass2) {
        ajax.open("POST", "../../controlador/ControPassUser.php", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                alert('Los datos fueron guardados con exito!');
                window.location.reload(true);
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send("id=" + id + "&usuario=" + usuario + "&pass=" + pass1);
    } else {
        alert("La Contraseña Ingresada No Es Valida");
    }





}
function PassUserPortal(usuario, pass1, pass2) {



    
    usuario = document.frmPass.usuario.value;
    pass1 = document.frmPass.pass1.value;
    pass2 = document.frmPass.pass2.value;



    ajax = objetoAjax();
    if (pass1 == pass2) {
        ajax.open("POST", "../../controlador/ControPassUserPor.php", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                alert('Los datos fueron guardados con exito!');
                window.location.reload(true);
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send("usuario=" + usuario + "&pass=" + pass1);
    } else {
        alert("La Contraseña Ingresada No Es Valida");
    }





}

