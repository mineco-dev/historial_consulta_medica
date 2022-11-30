<?php
if (strlen(session_id()) < 1) 
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema consultas Mineco</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="shortcut icon" href="../public/img/icono.ico">

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">    
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>H</b>M</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Historial Médico</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  
                  <span class="hidden-xs"><?php echo $_SESSION['nombre']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="../ajax/usuario.php?op=salir" class="btn btn-danger btn-sm">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">       
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            <?php 
            if ($_SESSION['escritorio']==1)
            {
              echo '<li>
              <a href="escritorio.php">
                <i class="fa fa-home"></i> <span>Inicio</span>
              </a>
            </li>';
            }
            ?>

            <?php 
            if ($_SESSION['pacientes']==1)
            {
              echo '<li>
              <a href="paciente.php">
                <i class="fa fa-users"></i>
                <span>Pacientes</span>
              </a>
            </li>';
            }
            ?>

            <?php 
            if ($_SESSION['clinica']==1)
            {
              echo '<li class="treeview">
              <a href="#">
                <i class="fa fa-hospital-o"></i>
                <span>Clínica</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion.php"><i class="fa fa-circle-o"></i> Configuraciones</a></li>
                <li><a href="servicio.php"><i class="fa fa-circle-o"></i> Servicios</a></li>
                <li><a href="personal.php"><i class="fa fa-circle-o"></i> Personal</a></li>
                <li><a href="permiso.php"><i class="fa fa-circle-o"></i> Permisos</a></li>
                <li><a href="diagnostico.php"><i class="fa fa-circle-o"></i> Diagnóstico</a></li>
              </ul>
            </li>';
            }
            ?>

            <?php 
            if ($_SESSION['atencion']==1)
            {
              echo '<li>
              <a href="atencion.php">
                <i class="fa fa-medkit"></i>
                <span>Programar Consulta</span>
              </a>
            </li>';
            }
            ?>
                        
            <?php 
            if ($_SESSION['triaje']==1)
            {
              echo '<li>
              <a href="triaje.php">
                <i class="fa fa-clock-o"></i> <span>Pre-Consulta</span>
              </a>
            </li>';
            }
            ?>

            <?php 
            if ($_SESSION['resultado']==1)
            {
              echo '<li>
              <a href="plan.php">
                <i class="fa fa-heartbeat"></i> <span>Consulta</span>
              </a>
            </li>';
            }
            ?>

             <?php 
            if ($_SESSION['consultas']==1)
            {
              echo '<li class="treeview">
              <a href="#">
                <i class="fa fa-search"></i> <span>Historial</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               
                <li><a href="historias.php"><i class="fa fa-circle-o"></i> Consultas médicas</a></li>                
              </ul>
            </li>';
            }
            ?>                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
