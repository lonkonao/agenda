
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Portal Telefonico - SaludCormun.cl</title>
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
         <link rel="stylesheet" href="../../css/fakeLoader.css">
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
                <a href="../../index.php" class="logo">
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
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="../../imag/user.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Invitado</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="../../imag/user.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            Inicio de Sesión

                                        </p>
                                    </li>


                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <form id="signin" class="navbar-form navbar-right" role="form" method="post" action="controlador/ControInicioSession.php">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input id="email" type="text" name="txtUser" class="form-control" placeholder="Usuario">                                        
                                            </div>

                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input id="password" type="password" class="form-control" name="txtPass" placeholder="Password">                                        
                                            </div>

                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </form>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <!--                    <div class="pull-left">
                                                              <a href="#" class="btn btn-default btn-flat">Profile</a>
                                                            </div>
                                                            <div class="pull-right">
                                                              <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                                            </div>-->
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <!--              <li>
                                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                                          </li>-->
                        </ul>
                    </div>

     
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
                        <li class="treeview">
                        <li><a href="../../index.php"><i class="fa fa-home"></i><span>Inicio</span></a></li>

                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-search"></i> <span>Búsquedas</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href='anexo.php'><i class='fa fa-phone'></i>Anexo</a></li> 
                                <li><a href='funcionario.php'><i class='fa fa-user'></i>Funcionario</a></li> 



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
                        Portal
                        <small>Inicio</small>
                    </h1>
                    
                </section>


                <!-- Main content -->
                
                
                <div id='contenido'>
                    <div class="fakeloader">

                        <script>
                            $(document).ready(function () {
                                $(".fakeloader").fakeLoader({
                                    timeToHide: 900,
                                    bgColor: "#ffffff",
                                    zIndex:"10",
                                    spinner: "spinner1",
                                    imagePath: "../../imag/Preloader_3.gif"
                                });
                            });
                        </script>
                    </div>
                    <center>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-blue"><a href="anexo.php"><i class="fa fa-mobile" style="padding-top: 20px;"></i></a></span>
                                <div class="info-box-content" style="padding-top: 20px;">
                                    <a href="anexo.php"><span class="info-box-text">Anexos</span></a>
                                    <span class="info-box-more"><a href="anexo.php"><i class="fa fa-search" style="padding-top: 20px;"></i></a></span>
                                </div><!-- /.info-box-content -->
                            </div><!-- /.info-box -->
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-blue"><a href="funcionario.php"><i class="fa fa-user" style="padding-top: 20px;"></i></a></span>
                                <div class="info-box-content" style="padding-top: 20px;">
                                    <a href="funcionario.php"><span class="info-box-text">Funcionarios</span></a>
                                    <span class="info-box-more"><a href="funcionario.php"><i class="fa fa-search" style="padding-top: 20px;"></i></a></span>
                                </div><!-- /.info-box-content -->
                            </div><!-- /.info-box -->
                        </div>
                        
                    </center>
                
                   
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
            <script src="../../js/fakeLoader.min.js"></script>
    </body>
</html>
