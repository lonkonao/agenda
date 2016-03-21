function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
		}
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
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
function RegistrarUsuario(accion) {
    

  
    id = document.frmRegistro.id.value;
    usuario = document.frmRegistro.usuario.value;
    permiso = document.frmRegistro.permiso.value;
    estado = document.frmRegistro.estado.value;
    editar = document.frmRegistro.editar.value;
    eliminar = document.frmRegistro.eliminar.value;

    ajax = objetoAjax();
 
    if (accion == 'N') {
        ajax.open("POST", "ControReg.php", true);
    } else if (accion == 'E') {
      
        ajax.open("POST", "ControActuUser.php", true);
    }
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            alert('Los datos fueron guardados con exito!');
            window.location.reload(true);
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("id=" + id + "&usuario=" + usuario +  "&permiso=" + permiso + "&estado=" + estado + "&editar=" + editar + "&eliminar=" + eliminar);
}



function EliminarUsuario(id) {
    if (confirm("En realizad desea eliminar este usuario?")) {
        ajax = objetoAjax();
        ajax.open("POST", "ControEliUser.php", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                alert('El usuario fue eliminado con exito!');
                window.location.reload(true);
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send("id=" + id)
    } else {
        //Sin acciones
    }
    }
  function PassUser(id,usuario,pass) {
    

  
    id = document.frmPass.id.value;
    usuario = document.frmPass.usuario.value;
    pass = document.frmPass.pass.value;
    

    ajax = objetoAjax();
 
    
     // alert("Datos id: "+id+" us: "+usuario+" p: "+pass);
     ajax.open("POST", "ControPassUser.php", true);
 
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            alert('Los datos fueron guardados con exito!');
            window.location.reload(true);
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("id=" + id + "&usuario=" + usuario +  "&pass=" + pass);
}  

