
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mantenedor-Funcionario</title>
        <!-- Tell the browser to be responsive to screen width -->
        <script type='text/javascript' src='../../js/jquery-1.7.1.min.js'></script>
        <link rel="stylesheet" href="../../css/cargador.css">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="../../plugins/iCheck/flat/blue.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="../../plugins/morris/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker-bs3.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
    <body class="hold-transition skin-blue sidebar-mini">

        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>T</b>I</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><img src="../../imag/logo_big.png" alt="lg" style="height: 57px;"></span>                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">

                    </div>
                    <!-- search form -->

                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">Menu Navegación</li>
                        <li class="active treeview">
                        <li><a href="../portal.php"><i class="fa fa-home"></i><span>Inicio</span></a></li>


                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-search"></i> <span>Buscador</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href='anexoBus.php'><i class='fa fa-phone'></i>Anexo</a></li> 
                                <li><a href='funcionarioBus.php'><i class='fa fa-user'></i>Funcionario</a></li> 
                            </ul>
                        </li>

                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-gears"></i> <span>Mantenedor</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">

                                <?php
                                if ($e == 1) {
                                    echo"<li><a href = 'mantenedor.php'><i class = 'fa fa-gears'></i>General</a></li>";
                                    echo"<li><a href = '#'><i class = 'fa fa-stethoscope'></i>Funcionario</a></li>";
                                    echo"<li><a href = 'equipo.php'><i class = 'fa fa-desktop '></i>Equipo</a></li>";
                                } elseif ($e == 0) {

                                    echo" <li><a href='../usuario/anexo.php'><i class='fa fa-phone'></i>Anexo</a></li> ";
                                    echo"<li><a href='../usuario/funcionario.php'><i class='fa fa-user'></i>Funcionario</a></li> ";
                                }
                                ?>
                            </ul>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header"> <!-- nombre pagina y breadcrumb -->
                    <h1>
                        Mantenedor
                        <small>Funcionario</small>
                    </h1>

                </section>


                <!-- Main content -->


                <div id='contenido'>

                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Borrar Usuario</h4>
                                </div>
                                <form role="form" action="" name="frmPass" onsubmit="PassUser(id, usuario, pass1,pass2); return false">
                                    <div class="col-lg-12">


                                        <div class="form-group">
                                            <label>ID</label>
                                            <input name="id" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Usuario</label>
                                            <input name="usuario" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input name="pass1" type="password" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Confirme Contraseña</label>
                                            <input name="pass2" type="password" class="form-control" required>
                                        </div>



                                        <button type="submit" class="btn btn-info btn-lg">
                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Guardar
                                        </button>

                                    </div>
                                </form>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-circle" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 10px;margin-top:10px">
                        <div class="col-md-11">
                            <div class="box box-warning ">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Usuarios</h3>

                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div class="col-xs-4" style="border:1px solid #f4f4f4;">
                                        <!-- form start -->

                                        <?php
                                        require_once '../../modelo/Data.php';
                                        $d = new Data();
                                        if (isset($_GET['id'])) {


                                            echo"   <form class = 'form-horizontal' method = 'POST' action = ''>";
                                            echo"  <div class = 'box-body'>";
                                            echo"  <div class = 'form-group'>";
                                            echo"  <div class = 'col-sm-10'>";
                                            echo"  <label>Nombre Usuario</label>";
                                            echo"  <input type = 'text' class = 'form-control' name = 'txtNombre' value='" . $user . "'>";
                                            echo"  </div>";

                                            echo"  <div class = 'col-sm-10'>";
                                            echo"  <label>Permiso Usuario</label>";
                                            $d->comboPermiso();
                                            echo"  </div>";
                                            echo"  <div class = 'col-sm-10'>";
                                            echo"  <label>Estado Usuario</label>";
                                            $d->comboEstado();
                                            echo"  </div>";

                                            echo"  <div class = 'col-sm-10'>";
                                            echo"  <label>Permiso Editar</label>";
                                            $d->comboEditar();
                                            echo"  </div>";
                                            echo"  <div class = 'col-sm-10'>";
                                            echo"  <label>Permiso Eliminar</label>";
                                            $d->comboEliminar();
                                            echo"  </div>";









                                            echo" </div>";
                                            echo"  </div>";

                                            echo" </div><!--/.box-body -->";
                                            echo" <div class = 'box-footer'>";
                                            echo"     <button type = 'submit' class = 'btn btn-info pull-right'>Guardar</button>";
                                            echo" </div>";
                                            echo" </form";
                                        } 
                                        else {

                                            echo"   <form class = 'form-horizontal' method = 'POST' action = '../../controlador/ControUsuario.php'>";
                                            echo"  <div class = 'box-body'>";
                                            echo"  <div class = 'form-group'>";
                                            echo"  <div class = 'col-sm-10'>";
                                            echo"  <label>Nombre Usuario</label>";
                                            echo"  <input type = 'text' class = 'form-control' name = 'txtNombre'>";
                                            echo"  </div>";
                                            echo"  <div class = 'col-sm-10'>";
                                            echo"  <label>Contraseña</label>";
                                            echo"  <input type = 'password' class = 'form-control' name = 'txtPass'>";
                                            echo"  </div>";
                                            echo"  <div class = 'col-sm-10'>";
                                            echo"  <label>Permiso Usuario</label>";
                                            $d->comboPermiso();
                                            echo"  </div>";
                                            echo"  <div class = 'col-sm-10'>";
                                            echo"  <label>Estado Usuario</label>";
                                            $d->comboEstado();
                                            echo"  </div>";
                                            echo"  <div class = 'col-sm-10'>";
                                            echo"  <label>Permiso Editar</label>";
                                            $d->comboEditar();
                                            echo"  </div>";
                                            echo"  <div class = 'col-sm-10'>";
                                            echo"  <label>Permiso Eliminar</label>";
                                            $d->comboEliminar();
                                            echo"  </div>";



                                            echo"  </div>";

                                            echo" </div><!--/.box-body -->";
                                            echo" <div class = 'box-footer'>";
                                            echo"     <button type = 'submit' class = 'btn btn-info pull-right'>Guardar</button>";
                                            echo" </div>";
                                            echo" </form";
                                        }
                                        echo" </div>";
                                        ?>
                                    </div>
                                    <div class = "col-xs-6">
                                        <?php
                                        $d->listaUsuario();
                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- /.content -->
        </div><!-- /.content-wrapper -->




        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 3.1
            </div>
            <strong>Copyright &copy; 2016-2017 <a href="#">Giovanni Cáceres R.</a></strong> 
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-light">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">


            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <!-- /.control-sidebar-menu -->

                </div><!-- /.tab-pane -->
                <!-- Stats tab content -->


            </div>
        </aside><!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->

        <script type="text/javascript">
            
            function Pass(id, usuario) {



                    document.frmPass.id.value = id;
                    document.frmPass.id.disabled=true
                    document.frmPass.usuario.value = usuario;
                    document.frmPass.id.disabled=true
                    document.frmPass.pass1.value = '';
                    document.frmPass.pass2.value = '';
                    
                    
                    $('#modal').modal('show');
                }
        </script>
        
        
        <script src="../../js/ajax.js"></script>
        <!-- jQuery 2.1.4 -->
        <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
                                    $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.5 -->
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="../../plugins/morris/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="../../plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="../../plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>

        <script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

        <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../../plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../../dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
    </body>
</html>