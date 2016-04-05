<?php

require 'Conexion.php';

class Data {

    public $c;

    public function __construct() {
        $this->c = new Conexion();
    }

//   
//    
//     
//      
//        
//    
//   
//
//    Select
//    
//    
//    
//    
//    
//    
//    
    
     public function listaAnexo() {

        $sql = "select anexo from anexo;";
        $res = $this->c->ejecutar($sql);




        echo"<div class='col-md-13'>";
        echo"  <table id='table' border='1px'>";
        echo"     <thead style='background-color: rgb(40, 96, 144); color: white;'>";
        echo"        <tr>";
        echo"           <th>ANEXOS INGRESADOS</th>";

        echo"      </tr>";
        echo"  </thead>";
        echo"  <tbody>";

        while ($row = $res->fetch_array()) {
            echo"        <tr>";
            echo"            <td>" . $row[0] . "</td>";

            echo" </tr>";
        }
        echo" </tbody>";
        echo" </table>";

        echo '</div>';
    }
    
    
    public function listaIP() {

        $sql = "select ip from equipo;";
        $res = $this->c->ejecutar($sql);




        echo"<div class='col-md-13'>";
        echo"  <table id='table' border='1px'>";
        echo"     <thead style='background-color: rgb(40, 96, 144); color: white;'>";
        echo"        <tr>";
        echo"           <th>IP INGRESADOS</th>";

        echo"      </tr>";
        echo"  </thead>";
        echo"  <tbody>";

        while ($row = $res->fetch_array()) {
            echo"        <tr>";
            echo"            <td>" . $row[0] . "</td>";

            echo" </tr>";
        }
        echo" </tbody>";
        echo" </table>";

        echo '</div>';
    }
    
    
    public function existeUsuario($usuario, $pass) {

        $sql = "select * from usuario "
                . "where usuario = '$usuario' and "
                . "pass = '$pass'";

        $us = null;

        $res = $this->c->ejecutar($sql);
        while ($fila = $res->fetch_array()) {
            $us = new Usuario();
            $us->id = $fila[0];
            $us->user = $fila[1];
            $us->pass = $fila[2];
            $us->permiso = $fila[3];
            $us->estado = $fila[4];
            $us->editar = $fila[5];
            $us->eliminar = $fila[6];
            $us->centro = $fila[7];
        }
        return $us;
    }

    public function listaUsuario() {
        $sql = "select u.id,u.usuario,p.nombre,es.nombre,ed.nombre,eli.nombre, u.centro from usuario u,permiso p,estado es,editar ed, eliminar eli where eli.id = u.eliminar and ed.id = u.editar and es.id =u.estado and p.id =u.permiso ";
        $res = $this->c->ejecutar($sql);


        echo"  <table id='datatables' class='table  >";
        echo"     <thead style='background-color: rgb(40, 96, 144); color: white;'>";
        echo"        <tr>";
        echo"            <th>ID</th>";
        echo"            <th>USUARIO</th>";
        echo"            <th>PERMISO</th>";
        echo"            <th>ESTADO</th>";
        echo"            <th>EDITAR</th>";
        echo"            <th>ELIMINAR</th>";
        echo"            <th>CENTRO</th>";
        echo "          <th>ACCIONES</th>";
        echo"      </tr>";
        echo"  </thead>";
        echo"  <tbody>";

        while ($row = $res->fetch_array()) {
            echo"        <tr>";
            echo"            <td>" . $row[0] . "</td>";
            echo"            <td>" . $row[1] . "</td>";
            echo"            <td>" . $row[2] . "</td>";
            echo"            <td>" . $row[3] . "</td>";
            echo"            <td>" . $row[4] . "</td>";
            echo"            <td>" . $row[5] . "</td>";

            switch ($row[6]) {
                case 0: echo"<td>TODOS</td>";
                    break;
                case 1: echo"<td>CESFAM 1</td>";
                    break;
                case 2: echo"<td>CESFAM 2</td>";
                    break;
                case 3: echo"<td>CESFAM 3</td>";
                    break;
                case 4: echo"<td>CESFAM 4</td>";
                    break;
                case 5: echo"<td>CESFAM 5</td>";
                    break;
                case 6: echo"<td>CESFAM 6</td>";
                    break;
                case 7: echo"<td>CECOSF 1</td>";
                    break;
                case 8: echo"<td>CECOSF 2</td>";
                    break;
                case 9: echo"<td>CECOSF 4</td>";
                    break;
                case 10: echo"<td>BRUJULA Y LABORATORIO</td>";
                    break;
                case 41: echo"<td>CESFAM 4B</td>";
                    break;

            }


            echo"           <td>";

            echo"<div class='btn-group' role='group'>";
            echo" <button type = 'button' class = 'btn btn-danger dropdown-toggle' data-toggle = 'dropdown' aria-haspopup = 'true' aria-expanded = 'false'>";
            echo"  ACCION";
            echo" <span class = 'caret'></span>";
            echo" </button>";
            echo " <ul class = 'dropdown-menu' role = 'menu'>";
            echo " <li><a href='user.php?id=" . $row[0] . "&user=" . $row[1] . "&per=" . $row[2] . "&es=" . $row[3] . "&ed=" . $row[4] . "&el=" . $row[5] . "&cen=".$row[6]."'> Editar Usuario</a></li>";
            echo " <li><a onclick = Eliminar('$row[0]')> Eliminar</a></li>";
            echo " <li><a onclick = Pass('$row[0]','$row[1]')> Cambiar Contraseña</a></li>";

            echo " </ul>";
            echo " </div>";

            echo"</td>";
            echo" </tr>";
        }
        echo" </tbody>";
        echo" </table>"


        ;
    }

    public function listaEquipo() {

        $sql = "SELECT e.ip,e.nombre,b.nombre,s.nombre,c.nombre,a.anexo,a.numeroExterno,f.nombre,f.apellidoP "
                . "from equipo e, box b, sector s, centro c,anexo a,funcionarioPc fp, funcionario f "
                . "WHERE b.id=e.box and s.id =e.sector and c.id = e.centro and a.anexo = e.anexo and "
                . "fp.equipo = e.ip and fp.funcionario = f.id ";
        $res = $this->c->ejecutar($sql);




        echo"<div class='col-md-13'>";
        echo"  <table id='table' class='table table-striped'>";
        echo"     <thead>";
        echo"        <tr>";
        echo"           <th>IP</th>";
        echo"           <th>NOMBRE EQUIPO</th>";
        echo"           <th>BOX</th>";
        echo"           <th>SECTOR</th>";
        echo"           <th>CENTRO</th>";
        echo"           <th>ANEXO</th>";
        echo"           <th>NUMERO EXTERNO</th>";
        echo"           <th>FUNCIONARIO</th>";
        echo"      </tr>";
        echo"  </thead>";
        echo"  <tbody>";

        while ($row = $res->fetch_array()) {
            echo"        <tr>";
            echo"            <td>" . $row[0] . "</td>";
            echo"            <td>" . $row[1] . "</td>";
            echo"            <td>" . $row[2] . "</td>";
            echo"            <td>" . $row[3] . "</td>";
            echo"            <td>" . $row[4] . "</td>";
            echo"            <td>" . $row[5] . "</td>";
            echo"            <td>" . $row[6] . "</td>";
            echo"            <td>" . $row[7] . "</td>";

            echo "<td>";
            echo"<div class='btn-group' role='group'>";
            echo" <button type = 'button' class = 'btn btn-danger dropdown-toggle' data-toggle = 'dropdown' aria-haspopup = 'true' aria-expanded = 'false'>";
            echo"  ACCION";
            echo" <span class = 'caret'></span>";
            echo" </button>";
            echo " <ul class = 'dropdown-menu' role = 'menu'>";
            echo " <li><a href='equipo.php?ip=" . $row[0] . "&nombre=" . $row[1] . "&box=" . $row[2] . "&sector=" . $row[3] . "&centro=" . $row[4] . "&anexo=" . $row[5] . "&numero=" . $row[6] . "&funcionario=" . $row[7] . "'> Actualizar</a></li>";
            echo "</td>";
            echo" </tr>";
        }
        echo" </tbody>";
        echo" </table>";

        echo '</div>';
    }
    public function listaFunEqu() {

        $sql = "select f.nombre,f.apellidoP,e.nombre,fp.equipo, eq.anexo FROM"
                . " funcionario f,estamento e,funcionarioPc fp, equipo eq WHERE"
                . " fp.funcionario = f.id and f.estamento = e.id and fp.equipo = eq.ip ";
        $res = $this->c->ejecutar($sql);

        
        echo" <script type='text/javascript' charset='utf-8'>";
        echo"   $(document).ready(function () {";
        echo"       $('#datatables').dataTable({";
        echo "  'oLanguage': {";
        echo "   'sLengthMenu': 'Mostrar _MENU_ Anexos por página',";
        echo "   'sSearch': 'Buscar',";
        echo "   'sEmptyTable': 'Vacio',";
        echo "   'sZeroRecords':'Sin Resultados',";

        echo "   'oPaginate': { ";
        echo "   'sLast': 'Última página',";
        echo"    'sFirst': 'Primera',";
        echo"    'sNext': 'Siguiente',";
        echo"    'sPrevious': 'Anterior'";
        echo" },";
        echo "    'sInfo': 'Hay _TOTAL_ Anexos. Mostrando de (_START_ a _END_)',";
        echo" }";
        echo"   })";
        echo "})";
        echo "  </script> ";



        echo"<div class='col-md-13'>";
        echo"  <table id='datatables' class='table table-striped'>";
        echo"     <thead>";
        echo"        <tr>";
        echo"           <th>NOMBRE</th>";
        echo"           <th>APELLIDO</th>";
        echo"           <th>ESTAMENTO</th>";
        echo"           <th>IP</th>";
        echo"           <th>ANEXO</th>";
        echo"           <th>ACCIONES</th>";
        echo"      </tr>";
        echo"  </thead>";
        echo"  <tbody>";

        while ($row = $res->fetch_array()) {
            echo"        <tr>";
            echo"            <td>" . $row[0] . "</td>";
            echo"            <td>" . $row[1] . "</td>";
            echo"            <td>" . $row[2] . "</td>";
            echo"            <td>" . $row[3] . "</td>";
            echo"            <td>" . $row[4] . "</td>";


            echo "<td>";
            echo"<div class='btn-group' role='group'>";
            echo" <button type = 'button' class = 'btn btn-danger dropdown-toggle' data-toggle = 'dropdown' aria-haspopup = 'true' aria-expanded = 'false'>";
            echo"  ACCION";
            echo" <span class = 'caret'></span>";
            echo" </button>";
            echo " <ul class = 'dropdown-menu' role = 'menu'>";
            echo " <li><a href='equipo.php?ip=" . $row[0] . "&nombre=" . $row[1] . "&box=" . $row[2] . "&sector=" . $row[3] . "&centro=" . $row[4] . "&anexo=" . $row[5] . "&numero=" . $row[6] . "&funcionario=" . $row[7] . "'> Actualizar</a></li>";
            echo "</td>";
            echo" </tr>";
        }
        echo" </tbody>";
        echo" </table>";

        echo '</div>';
    }
    public function listaEquipoF($ce) {

        $sql = "SELECT e.ip,e.nombre,b.nombre,s.nombre,c.nombre,a.anexo,a.numeroExterno,f.nombre,f.apellidoP "
                . "from equipo e, box b, sector s, centro c,anexo a,funcionarioPc fp, funcionario f "
                . "WHERE b.id=e.box and s.id =e.sector and c.id = e.centro and a.anexo = e.anexo and "
                . "fp.equipo = e.ip and fp.funcionario = f.id and c.id = '".$ce."' ";
        $res = $this->c->ejecutar($sql);




        echo"<div class='col-md-13'>";
        echo"  <table id='table' class='table table-striped'>";
        echo"     <thead>";
        echo"        <tr>";
        echo"           <th>IP</th>";
        echo"           <th>NOMBRE EQUIPO</th>";
        echo"           <th>BOX</th>";
        echo"           <th>SECTOR</th>";
        echo"           <th>CENTRO</th>";
        echo"           <th>ANEXO</th>";
        echo"           <th>NUMERO EXTERNO</th>";
        echo"           <th>FUNCIONARIO</th>";
        echo"      </tr>";
        echo"  </thead>";
        echo"  <tbody>";

        while ($row = $res->fetch_array()) {
            echo"        <tr>";
            echo"            <td>" . $row[0] . "</td>";
            echo"            <td>" . $row[1] . "</td>";
            echo"            <td>" . $row[2] . "</td>";
            echo"            <td>" . $row[3] . "</td>";
            echo"            <td>" . $row[4] . "</td>";
            echo"            <td>" . $row[5] . "</td>";
            echo"            <td>" . $row[6] . "</td>";
            echo"            <td>" . $row[7] . "</td>";

            echo "<td>";
            echo"<div class='btn-group' role='group'>";
            echo" <button type = 'button' class = 'btn btn-danger dropdown-toggle' data-toggle = 'dropdown' aria-haspopup = 'true' aria-expanded = 'false'>";
            echo"  ACCION";
            echo" <span class = 'caret'></span>";
            echo" </button>";
            echo " <ul class = 'dropdown-menu' role = 'menu'>";
            echo " <li><a href='equipo.php?ip=" . $row[0] . "&nombre=" . $row[1] . "&box=" . $row[2] . "&sector=" . $row[3] . "&centro=" . $row[4] . "&anexo=" . $row[5] . "&numero=" . $row[6] . "&funcionario=" . $row[7] . "'> Actualizar</a></li>";
            echo "</td>";
            echo" </tr>";
        }
        echo" </tbody>";
        echo" </table>";

        echo '</div>';
    }


    public function listaFuncio() {

        $sql = "select id,nombre,apellidoP,mail, from funcionario;";
        $res = $this->c->ejecutar($sql);




        echo"<div class='col-md-13'>";
        echo"  <table id='table' border='1px'>";
        echo"     <thead style='background-color: rgb(40, 96, 144); color: white;'>";
        echo"        <tr>";
        echo"           <th>FUNCIONARIOS</th>";

        echo"      </tr>";
        echo"  </thead>";
        echo"  <tbody>";

        while ($row = $res->fetch_array()) {
            echo"        <tr>";
            echo"            <td>" . $row[0] . "</td>";

            echo" </tr>";
        }
        echo" </tbody>";
        echo" </table>";

        echo '</div>';
    }

    public function tabla() {

        /* tabla que muestra los datos requeridos de forma rapida */

        $sql = "SELECT e.ip,e.nombre,c.nombre,b.nombre,s.nombre, a.anexo , a.numeroExterno from equipo e,centro c,box b,sector s,anexo a where b.id = e.box and s.id = e.sector and c.id = e.centro and a.anexo = e.anexo";
        $res = $this->c->ejecutar($sql);



        echo"  <table id='datatables' class='table table-striped table-bordered table-hover table-condensed' >";
        echo"     <thead style='background-color: rgb(40, 96, 144); color: white;'>";
        echo"        <tr>";
        echo"            <th>IP</th>";
        echo"           <th>NOMBRE EQUIPO</th>";
        echo"           <th>CENTRO</th>";
        echo"           <th>BOX</th>";
        echo"           <th>SECTOR</th>";
        echo"           <th>ANEXO</th>";
        echo"           <th>NUMERO EXTERNO</th>";
        echo"      </tr>";
        echo"  </thead>";
        echo"  <tbody>";

        while ($row = $res->fetch_array()) {
            echo"        <tr>";
            echo"            <td>" . $row[0] . "</td>";
            echo"            <td>" . $row[1] . "</td>";
            echo"            <td>" . $row[2] . "</td>";
            echo"            <td>" . $row[3] . "</td>";
            echo"            <td>" . $row[4] . "</td>";
            echo"            <td>" . $row[5] . "</td>";
            echo"            <td>" . $row[6] . "</td>";
            echo" </tr>";
        }
        echo" </tbody>";
        echo" </table>"


        ;
    }

    public function listaSector() {

        $sql = "select nombre from sector;";
        $res = $this->c->ejecutar($sql);




        echo"<div class='col-md-13'>";
        echo"  <table id='table' border='1px'>";
        echo"     <thead style='background-color: rgb(40, 96, 144); color: white;'>";
        echo"        <tr>";
        echo"           <th>SECTORES INGRESADOS</th>";

        echo"      </tr>";
        echo"  </thead>";
        echo"  <tbody>";

        while ($row = $res->fetch_array()) {
            echo"        <tr>";
            echo"            <td>" . $row[0] . "</td>";

            echo" </tr>";
        }
        echo" </tbody>";
        echo" </table>";

        echo '</div>';
    }

    public function listaBox() {

        $sql = "select nombre from box;";
        $res = $this->c->ejecutar($sql);




        echo"<div class='col-md-13'>";
        echo"  <table id='table' border='1px'>";
        echo"     <thead style='background-color: rgb(40, 96, 144); color: white;'>";
        echo"        <tr>";
        echo"           <th>BOX INGRESADOS</th>";

        echo"      </tr>";
        echo"  </thead>";
        echo"  <tbody>";

        while ($row = $res->fetch_array()) {
            echo"        <tr>";
            echo"            <td>" . $row[0] . "</td>";

            echo" </tr>";
        }
        echo" </tbody>";
        echo" </table>";

        echo '</div>';
    }

    public function listaCentro() {

        $sql = "select nombre from centro;";
        $res = $this->c->ejecutar($sql);




        echo"<div class='col-md-13'>";
        echo"  <table id='table' border='1px'>";
        echo"     <thead style='background-color: rgb(40, 96, 144); color: white;'>";
        echo"        <tr>";
        echo"           <th>CENTROS INGRESADOS</th>";

        echo"      </tr>";
        echo"  </thead>";
        echo"  <tbody>";

        while ($row = $res->fetch_array()) {
            echo"        <tr>";
            echo"            <td>" . $row[0] . "</td>";

            echo" </tr>";
        }
        echo" </tbody>";
        echo" </table>";

        echo '</div>';
    }

    public function listaEsta() {

        $sql = "select nombre from estamento;";
        $res = $this->c->ejecutar($sql);




        echo"<div class='col-md-13'>";
        echo"  <table id='table' border='1px'>";
        echo"     <thead style='background-color: rgb(40, 96, 144); color: white;'>";
        echo"        <tr>";
        echo"           <th>ESTAMENTOS INGRESADOS</th>";

        echo"      </tr>";
        echo"  </thead>";
        echo"  <tbody>";

        while ($row = $res->fetch_array()) {
            echo"        <tr>";
            echo"            <td>" . $row[0] . "</td>";

            echo" </tr>";
        }
        echo" </tbody>";
        echo" </table>";

        echo '</div>';
    }

    public function listaFuncionario() {

        $sql = "select f.id,f.nombre,f.apellidoP,f.mail,e.nombre from funcionario f,estamento e where e.id=f.estamento";
        $res = $this->c->ejecutar($sql);




        echo"<div class='col-md-13'>";
        echo"  <table id='table' class='table table-striped'>";
        echo"     <thead>";
        echo"        <tr>";
        echo"           <th>ID</th>";
        echo"           <th>NOMBRE</th>";
        echo"           <th>APELLIDO</th>";
        echo"           <th>CORREO</th>";
        echo"           <th>ESTAMENTO</th>";
        echo"           <th>ACCIONES</th>";
        echo"      </tr>";
        echo"  </thead>";
        echo"  <tbody>";

        while ($row = $res->fetch_array()) {
            echo"        <tr>";
            echo"            <td>" . $row[0] . "</td>";
            echo"            <td>" . $row[1] . "</td>";
            echo"            <td>" . $row[2] . "</td>";
            echo"            <td>" . $row[3] . "</td>";
            echo"            <td>" . $row[4] . "</td>";

            echo "<td>";
            echo"<div class='btn-group' role='group'>";
            echo" <button type = 'button' class = 'btn btn-danger dropdown-toggle' data-toggle = 'dropdown' aria-haspopup = 'true' aria-expanded = 'false'>";
            echo"  ACCION";
            echo" <span class = 'caret'></span>";
            echo" </button>";
            echo " <ul class = 'dropdown-menu' role = 'menu'>";
            echo " <li><a href='funcionario.php?id=" . $row[0] . "&nombre=" . $row[1] . "&apellido=" . $row[2] . "&mail=" . $row[3] . "&es=" . $row[4] . "'> Actualizar</a></li>";
            echo "</td>";
            echo" </tr>";
        }
        echo" </tbody>";
        echo" </table>";

        echo '</div>';
    }

    public function tablaF() {

        /* tabla que muestra los datos requeridos de forma rapida */

        $sql = "select f.nombre,f.apellidoP,es.nombre,a.anexo,b.nombre,s.nombre,c.nombre,e.ip "
                . "FROM estamento es,funcionario f, funcionarioPc fp,equipo e,centro c,anexo a,box b,sector s "
                . "WHERE es.id = f.estamento and f.id = fp.funcionario and fp.equipo = e.ip and b.id=e.box and "
                . "s.id = e.sector and c.id =e.centro and a.anexo=e.anexo ";
        $res = $this->c->ejecutar($sql);

        echo" <script type='text/javascript' charset='utf-8'>";
        echo"   $(document).ready(function () {";
        echo"       $('#datatables').dataTable({";
        echo "  'oLanguage': {";
        echo "   'sLengthMenu': 'Mostrar _MENU_ Anexos por página',";
        echo "   'sSearch': 'Buscar',";
        echo "   'sEmptyTable': 'Vacio',";
        echo "   'sZeroRecords':'Sin Resultados',";

        echo "   'oPaginate': { ";
        echo "   'sLast': 'Última página',";
        echo"    'sFirst': 'Primera',";
        echo"    'sNext': 'Siguiente',";
        echo"    'sPrevious': 'Anterior'";
        echo" },";
        echo "    'sInfo': 'Hay _TOTAL_ Anexos. Mostrando de (_START_ a _END_)',";
        echo" }";
        echo"   })";
        echo "})";
        echo "  </script> ";

        echo"  <table id='datatables' class='table table-striped table-bordered table-hover table-condensed' >";
        echo"     <thead style='background-color: rgb(40, 96, 144); color: white;'>";
        echo"        <tr>";
        echo"           <th>NOMBRE</th>";
        echo"           <th>APELLIDO</th>";
        echo"           <th>ESTAMENTO</th>";
        echo"           <th>ANEXO</th>";
        echo"           <th>BOX</th>";
        echo"           <th>SECTOR</th>";
        echo"           <th>CENTRO</th>";
        echo"           <th>IP</th>";
        echo"      </tr>";
        echo"  </thead>";
        echo"  <tbody>";

        while ($row = $res->fetch_array()) {
            echo"        <tr>";
            echo"            <td>" . $row[0] . "</td>";
            echo"            <td>" . $row[1] . "</td>";
            echo"            <td>" . $row[2] . "</td>";
            echo"            <td>" . $row[3] . "</td>";
            echo"            <td>" . $row[4] . "</td>";
            echo"            <td>" . $row[5] . "</td>";
            echo"            <td>" . $row[6] . "</td>";
            echo"            <td>" . $row[7] . "</td>";
            echo" </tr>";
        }
        echo" </tbody>";
        echo" </table>"


        ;
    }

    public function idFuncionarioPc($funcionario, $equipo) {
        $sql = "SELECT id from funcionarioPc WHERE funcionario = '" . $funcionario . "' and equipo = '" . $equipo . "' ";

        $res = $this->c->ejecutar($sql);

        while ($row = $res->fetch_array()) {
            $idFuncionarioPC = $row[0];
        }

        return $idFuncionarioPC;
    }

    public function idFuncionario($nombre) {
        $sql = "SELECT `id` FROM `funcionario` WHERE `nombre`='" . $nombre . "' ";

        $res = $this->c->ejecutar($sql);

        while ($row = $res->fetch_array()) {
            $idFuncionario = $row[0];
        }

        return $idFuncionario;
    }

    public function dataTablesUser() {
        $sql = "select u.id,u.usuario,p.nombre,es.nombre,ed.nombre,eli.nombre from usuario u,permiso p,estado es,editar ed, eliminar eli where eli.id = u.eliminar and ed.id = u.editar and es.id =u.estado and p.id =u.permiso";
        $res = $this->c->ejecutar($sql);

//        echo" <script type='text/javascript' charset='utf-8'>";
//        echo"   $(document).ready(function () {";
//        echo"       $('#datatables').dataTable()";
//        echo "})";
//        echo "  </script> ";

        echo"  <table id='datatables' class='table  >";
        echo"     <thead style='background-color: rgb(40, 96, 144); color: white;'>";
        echo"        <tr>";
        echo"            <th>ID</th>";
        echo"            <th>USUARIO</th>";
        echo"            <th>PERMISO</th>";
        echo"            <th>ESTADO</th>";
        echo"            <th>EDITAR</th>";
        echo"            <th>ELIMINAR</th>";
        echo "          <th>ACCIONES</th>";
        echo"      </tr>";
        echo"  </thead>";
        echo"  <tbody>";

        while ($row = $res = fetch_array()) {
            echo"        <tr>";
            echo"            <td>" . $row[0] . "</td>";
            echo"            <td>" . $row[1] . "</td>";
            echo"            <td>" . $row[2] . "</td>";
            echo"            <td>" . $row[3] . "</td>";
            echo"            <td>" . $row[4] . "</td>";
            echo"            <td>" . $row[5] . "</td>";
            echo"           <td>";

            echo"<div class='btn-group' role='group'>";
            echo" <button type = 'button' class = 'btn btn-danger dropdown-toggle' data-toggle = 'dropdown' aria-haspopup = 'true' aria-expanded = 'false'>";
            echo"  ACCION";
            echo" <span class = 'caret'></span>";
            echo" </button>";
            echo " <ul class = 'dropdown-menu' role = 'menu'>";
            echo " <li><a href='funcionario.php?id=" . $row[0] . "&nombre=" . $row[1] . "&apellido=" . $row[2] . "&mail=" . $row[3] . "&es=" . $row[4] . "'> Actualizar</a></li>";







            echo " </ul>";
            echo " </div>";

            echo"</td>";
            echo" </tr>";
        }
        echo" </tbody>";
        echo" </table>"


        ;
    }

//    
//     
//      
//        
//    
//   
//
//    Select
//    
//    
//    
//    
//    
//    
// 
//   
//    
//     
//      
//        
//    
//   
//
//    INSERT
//    
//    
//    
//    
//    
//    
//  

     public function insertIP($ip) {
        $sql = "insert into equipo values ('" . $ip . "',null,null,null,null,null)";




        if (!$this->c->ejecutar($sql)) {
            echo '<script language="javascript">';
            echo 'alert("Error, No se Realizo la accion ");location.href="../vista/admin/mantenedor.php"';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Registrado Correctamente"); location.href="../vista/portal.php"';
            echo '</script>';
        }
    }

    public function insertEquipo($ip, $nombre, $box, $sector, $centro, $anexo) {
        $sql = "insert into equipo values ('" . $ip . "','" . $nombre . "','" . $box . "','" . $sector . "','" . $centro . "','" . $anexo . "')";




        if (!$this->c->ejecutar($sql)) {
            echo '<script language="javascript">';
            echo 'alert("Error, No se Realizo la accion ");location.href="../vista/portal.php"';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Registrado Correctamente"); location.href="../vista/portal.php"';
            echo '</script>';
        }
    }

    public function insertAnexo($anexo, $num) {
        $sql = "insert into anexo values ('" . $anexo . "','" . $num . "')";

        if (!$this->c->ejecutar($sql)) {
            echo '<script language="javascript">';
            echo 'alert("Error, No se Realizo la accion");location.href="../vista/portal.php"';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Registrado Correctamente"); location.href="../vista/portal.php"';
            echo '</script>';
        }
    }

    public function insertFuncionario($nombre, $apellido, $mail, $estamento) {
        $sql = "insert into funcionario values (null,'" . $nombre . "','" . $apellido . "','" . $mail . "','" . $estamento . "')";

        if (!$this->c->ejecutar($sql)) {
            echo '<script language="javascript">';
            echo 'alert("Error, No se Realizo la accion");location.href="../vista/portal.php"';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Registrado Correctamente"); location.href="../vista/portal.php"';
            echo '</script>';
        }
    }

    public function insertSector($sector) {
        $sql = "insert into sector values (null,'" . $sector . "')";

        if (!$this->c->ejecutar($sql)) {
            echo '<script language="javascript">';
            echo 'alert("Error, No se Realizo la accion");location.href="../vista/portal.php"';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Registrado Correctamente"); location.href="../vista/portal.php"';
            echo '</script>';
        }
    }

    public function insertBox($box) {
        $sql = "insert into box values (null,'" . $box . "')";

        if (!$this->c->ejecutar($sql)) {
            echo '<script language="javascript">';
            echo 'alert("Error, No se Realizo la accion");location.href="../vista/portal.php"';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Registrado Correctamente"); location.href="../vista/portal.php"';
            echo '</script>';
        }
    }

    public function insertCentro($centro, $dir, $tele) {
        $sql = "insert into centro values (null,'" . $centro . "','" . $dir . "','" . $tele . "')";

        if (!$this->c->ejecutar($sql)) {
            echo '<script language="javascript">';
            echo 'alert("Error, No se Realizo la accion");location.href="../vista/portal.php"';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Registrado Correctamente"); location.href="../vista/portal.php"';
            echo '</script>';
        }
    }

    public function insertEsta($estamento) {
        $sql = "insert into estamento values (null,'" . $estamento . "')";

        if (!$this->c->ejecutar($sql)) {
            echo '<script language="javascript">';
            echo 'alert("Error, No se Realizo la accion");location.href="../vista/portal.php"';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Registrado Correctamente"); location.href="../vista/portal.php"';
            echo '</script>';
        }
    }

    public function insertFuncioPc($funcionario, $equipo) {
        $sql = "insert into funcionarioPc values (null,'" . $funcionario . "','" . $equipo . "')";

        $this->c->ejecutar($sql);
    }

    public function insertUsuario($nombre, $pass, $permiso, $estado, $editar, $eliminar) {
        $sql = "insert into usuario values (null,'" . $nombre . "','" . $pass . "','" . $permiso . "','" . $estado . "','" . $editar . "','" . $eliminar . "')";

        if (!$this->c->ejecutar($sql)) {
            echo '<script language="javascript">';
            echo 'alert("Error, No se Realizo la accion");location.href="../vista/portal.php"';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Registrado Correctamente"); location.href="../vista/portal.php"';
            echo '</script>';
        }
    }

//    
//     
//      
//        
//    
//   
//
//    INSERT
//    
//    
//    
//    
//    
//    
//     
//    
//     
//      
//        
//    
//   
//
//    combo
//    
//    
//    
//    
//    
//    
//  
    public function comboCentroFA($nombre) {

        $sql = "select id,nombre from centro ";

        $res = $this->c->ejecutar($sql);
        echo "<select id='centro' name='centro' class='form-control'>";
        while ($resultado = $res->fetch_array()) {
            if ($nombre == $resultado[0]) {
                echo "<option value='" . $resultado[0] . "' selected> " . $resultado[1] . "</option>";
            } else {
                echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
            }
        }
         echo "</select>";
    }
    public function comboCentroF($nombre) {

        $sql = "select id,nombre from centro ";

        $res = $this->c->ejecutar($sql);
        echo "<select id='centro' name='centro' class='form-control' disabled>";
        while ($resultado = $res->fetch_array()) {
            if ($nombre == $resultado[0]) {
                echo "<option value='" . $resultado[0] . "' selected> " . $resultado[1] . "</option>";
            } else {
                echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
            }
        }
         echo "</select>";
    }

    public function comboSectorF($nombre) {

        $sql = "select id,nombre from sector";

        $res = $this->c->ejecutar($sql);
        echo "<select id='sector' name='sector' class='form-control'>";
        while ($resultado = $res->fetch_array()) {
            if ($nombre == $resultado[1]) {
                echo "<option value='" . $resultado[0] . "' selected> " . $resultado[1] . "</option>";
            } else {
                echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
            }
        }
        echo "</select>";
    }

    public function comboBoxF($nombre) {

        $sql = "select id,nombre from box";

        $res = $this->c->ejecutar($sql);
        echo "<select id='box' name='box' class='form-control'>";
        while ($resultado = $res->fetch_array()) {
            if ($nombre == $resultado[1]) {
                echo "<option value='" . $resultado[0] . "' selected> " . $resultado[1] . "</option>";
            } else {
                echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
            }
        }
        echo "</select>";
    }
    

    public function comboFuncionarioF($nombre) {

        $sql = "select id,nombre from funcionario";

        $res = $this->c->ejecutar($sql);
        echo "<select id='funcionario' name='funcionario' class='form-control'>";
        while ($resultado = $res->fetch_array()) {
            if ($nombre == $resultado[1]) {
                echo "<option value='" . $resultado[0] . "' selected> " . $resultado[1] . "</option>";
            } else {
                echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
            }
        }
        echo "</select>";
    }
    

    public function comboEstamento() {

        $sql = "select id,nombre from estamento";

        $res = $this->c->ejecutar($sql);
        echo "<select id='estamento' name='estamento' class='form-control'>";
        while ($resultado = $res->fetch_array()) {

            echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
        }
        echo "</select>";
    }

    public function comboEstamentoF($nombre) {

        $sql = "select id,nombre from estamento";

        $res = $this->c->ejecutar($sql);
        echo "<select id='estamento' name='estamento' class='form-control'>";
        while ($resultado = $res->fetch_array()) {
            if ($nombre == $resultado[1]) {
                echo "<option value='" . $resultado[0] . "' selected> " . $resultado[1] . "</option>";
            } else {
                echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
            }
        }
        echo "</select>";
    }

    public function comboCentro() {

        $sql = "select id,nombre from centro";

        $res = $this->c->ejecutar($sql);
        echo "<select id='centro' name='centro' class='form-control'>";
        while ($resultado = $res->fetch_array()) {

            echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
        }
        echo "</select>";
    }

    public function comboSector() {

        $sql = "select id,nombre from sector";

        $res = $this->c->ejecutar($sql);
        echo "<select id='sector' name='sector' class='form-control'>";
        while ($resultado = $res->fetch_array()) {

            echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
        }
        echo "</select>";
    }

    public function comboBox() {

        $sql = "select id,nombre from box";

        $res = $this->c->ejecutar($sql);
        echo "<select id = 'box' name='box' class='form-control'>";
        while ($resultado = $res->fetch_array()) {

            echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
        }
        echo "</select>";
    }

    public function comboFuncionario() {

        $sql = "select id,nombre,apellidoP from funcionario";

        $res = $this->c->ejecutar($sql);
        echo "<select id = 'funcionario' name='funcionario' class='form-control'>";
        while ($resultado = $res->fetch_array()) {

            echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . " " . $resultado[2] . "</option>";
        }
        echo "</select>";
    }
    public function comboIpMasAnex() {

        $sql = "select ip,anexo from equipo WHERE nombre<> 'null'";

        $res = $this->c->ejecutar($sql);
        echo "<select id = 'comboIP' name='comboIP' class='form-control'>";
        while ($resultado = $res->fetch_array()) {

            echo "<option value='" . $resultado[0] . "'> IP: " . $resultado[0] . " / Anexo: " . $resultado[1] . "</option>";
        }
        echo "</select>";
    }

    public function comboPermiso() {

        $sql = "select id,nombre from permiso";

        $res = $this->c->ejecutar($sql);
        echo "<select id = 'permiso' name='permiso' class='form-control'>";
        while ($resultado = $res->fetch_array()) {

            echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
        }
        echo "</select>";
    }

    public function comboPermisoF($per) {

        $sql = "select id,nombre from permiso";

        $res = $this->c->ejecutar($sql);
        echo "<select id = 'permiso' name='permiso' class='form-control'>";
        while ($resultado = $res->fetch_array()) {
            if ($per == $resultado[1]) {
                echo "<option value='" . $resultado[0] . "' selected> " . $resultado[1] . "</option>";
            } else {
                echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
            }
        }
        echo "</select>";
    }

    public function comboEstado() {

        $sql = "select id,nombre from estado";

        $res = $this->c->ejecutar($sql);
        echo "<select id = 'estado' name='estado' class='form-control'>";
        while ($resultado = $res->fetch_array()) {

            echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
        }
        echo "</select>";
    }

    public function comboEstadof($es) {

        $sql = "select id,nombre from estado";

        $res = $this->c->ejecutar($sql);
        echo "<select id = 'estado' name='estado' class='form-control'>";
        while ($resultado = $res->fetch_array()) {
            if ($es == $resultado[1]) {
                echo "<option value='" . $resultado[0] . "' selected> " . $resultado[1] . "</option>";
            } else {
                echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
            }
        }
        echo "</select>";
    }

    public function comboEditar() {

        $sql = "select id,nombre from editar";

        $res = $this->c->ejecutar($sql);
        echo "<select id = 'editar' name='editar' class='form-control'>";
        while ($resultado = $res->fetch_array()) {

            echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
        }
        echo "</select>";
    }

    public function comboEditarF($ed) {

        $sql = "select id,nombre from editar";

        $res = $this->c->ejecutar($sql);
        echo "<select id = 'editar' name='editar' class='form-control'>";
        while ($resultado = $res->fetch_array()) {
            if ($ed == $resultado[1]) {
                echo "<option value='" . $resultado[0] . "' selected> " . $resultado[1] . "</option>";
            } else {
                echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
            }
        }
        echo "</select>";
    }

    public function comboEliminar() {

        $sql = "select id,nombre from eliminar";

        $res = $this->c->ejecutar($sql);
        echo "<select id = 'eliminar' name='eliminar' class='form-control'>";
        while ($resultado = $res->fetch_array()) {

            echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
        }
        echo "</select>";
    }

    public function comboEliminarF($el) {

        $sql = "select id,nombre from eliminar";

        $res = $this->c->ejecutar($sql);
        echo "<select id = 'eliminar' name='eliminar' class='form-control'>";
        while ($resultado = $res->fetch_array()) {
            if ($el == $resultado[1]) {
                echo "<option value='" . $resultado[0] . "' selected> " . $resultado[1] . "</option>";
            } else {
                echo "<option value='" . $resultado[0] . "'> " . $resultado[1] . "</option>";
            }
        }
        echo "</select>";
    }

    public function comboAnexo($ce) {

        $sql = "select anexo from anexo where anexo like '".$ce."%'";

        $res = $this->c->ejecutar($sql);
        echo "<select id='anexo' name='anexo' class='form-control'>";
        while ($resultado = $res->fetch_array()) {

            echo "<option value='" . $resultado[0] . "'> " . $resultado[0] . "</option>";
        }
        echo "</select>";
    }
    
    public function comboAnexoTodos() {

        $sql = "select anexo from anexo";

        $res = $this->c->ejecutar($sql);
        echo "<select id='anexo' name='anexo' class='form-control'>";
        while ($resultado = $res->fetch_array()) {

            echo "<option value='" . $resultado[0] . "'> " . $resultado[0] . "</option>";
        }
        echo "</select>";
    }

      public function comboAnexoTodosF($anexo) {

        $sql = "select anexo from anexo";

        $res = $this->c->ejecutar($sql);
        echo "<select id='anexo' name='anexo' class='form-control'>";
        while ($resultado = $res->fetch_array()) {
            if ($anexo == $resultado[0]) {
                echo "<option value='" . $resultado[0] . "' selected> " . $resultado[0] . "</option>";
            } else {
                echo "<option value='" . $resultado[0] . "'> " . $resultado[0] . "</option>";
            }
        }
        echo "</select>";
    }
      public function comboAnexoTodosFF($anexo,$ce) {

        $sql = "select anexo from anexo where anexo like '".$ce."%'";

        $res = $this->c->ejecutar($sql);
        echo "<select id='anexo' name='anexo' class='form-control'>";
        while ($resultado = $res->fetch_array()) {
            if ($anexo == $resultado[0]) {
                echo "<option value='" . $resultado[0] . "' selected> " . $resultado[0] . "</option>";
            } else {
                echo "<option value='" . $resultado[0] . "'> " . $resultado[0] . "</option>";
            }
        }
        echo "</select>";
    }
    //    
//     
//      
//        
//    
//   
//
//    combo
//    
//    
//    
//    
//    
//    
//     
    //    
//     
//      
//        
//    
//   
//
//    Update
//    
//    
//    
//    
//    
//    
//  


    public function updateFuncionario($nombre, $apellido, $mail, $estamento, $id) {
        $sql = "UPDATE `agendaCormun`.`funcionario` SET `nombre` = '" . $nombre . "', `apellidoP` = '" . $apellido . "', `mail` = '" . $mail . "', `estamento` = '" . $estamento . "' WHERE `funcionario`.`id` = '" . $id . "'";

        $this->c->ejecutar($sql);
    }

    public function updateAnexo($anexo, $numExterno) {
        $sql = "UPDATE `agendaCormun`.`anexo` SET `anexo` = '" . $anexo . "', `numeroExterno` = '" . $numExterno . "' WHERE `anexo`.`anexo` = '" . $anexo . "'";

        $this->c->ejecutar($sql);
    }

    public function updateEquipo($ip, $nombre, $box, $sector, $centro, $anexo) {
        $sql = "UPDATE `agendaCormun`.`equipo` SET `nombre` = '" . $nombre . "', `box` = '" . $box . "', `sector` = '" . $sector . "', `centro` = '" . $centro . "', `anexo` = '" . $anexo . "'  WHERE `equipo`.`ip` = '" . $ip . "'";

        $this->c->ejecutar($sql);
    }

    public function updateFunPc($funcionario, $equipo, $id) {
        $sql = "UPDATE `agendaCormun`.`funcionarioPc` SET `funcionario` = '" . $funcionario . "', `equipo` = '" . $equipo . "' WHERE `funcionarioPc`.`id` = '" . $id . "'";

        $this->c->ejecutar($sql);
    }

    public function upPassUser($id, $pass) {
        $sql = "UPDATE usuario set pass='" . $pass . "' where id='" . $id . "'";
        $this->c->ejecutar($sql);
    }

    public function upUser($id, $user, $per, $es, $ed, $el,$cen) {
        $sql = "UPDATE usuario set usuario='" . $user . "', permiso='" . $per . "', estado='" . $es . "', editar='" . $ed . "', eliminar='" . $el . "', centro='" . $cen . "' where id='" . $id . "'";


        if (!$this->c->ejecutar($sql)) {
            echo '<script language="javascript">';
            echo 'alert("Error, No se Realizo la accion");location.href="../vista/portal.php"';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("El Usuario (' . $user . ') Ha Sido Actualizado Correctamente"); location.href="../vista/portal.php"';
            echo '</script>';
        }
    }

    //
//    
//    
//    
//    
//    Borrar
//    
//    
//    
//    
//    
//    
//    
//    
//    
//    



    public function borrarUsuario($id) {
        $sql = "DELETE FROM usuario WHERE id = '" . $id . "'";
        if (!$this->c->ejecutar($sql)) {
            echo '<script language="javascript">';
            echo 'alert("Error, No se Realizo la accion");location.href="../vista/portal.php"';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Eliminado Correctamente"); location.href="../vista/portal.php"';
            echo '</script>';
        }
    }

}
