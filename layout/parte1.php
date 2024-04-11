<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es"> <!--lenguaje en español-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AVVO | technology</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- aqui va la libreria de sweetalert2 -->
  <link rel="stylesheet" href="<?php echo $URL?>/public/css/reloj.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">

<!--<script>
  Swal.fire({
  position: "top-center",
  icon: "success",
  title: "Bienvenido al sistema de Turnos <br> usuario: <?php echo $nombres_sesion?>", // aqui concatenamos la variable donde guardamos la sesion mas arriba de la consulta del nombre
  showConfirmButton: false,
  timer: 2000
});
</script> -->
<div class="wrapper">

  <!-- Navbar las opciones de arriba de la pagina-->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Turnos laborales <strong>AVVO | technology</strong></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">Notificaciones</span>
          <div class="dropdown-divider"></div>
          
          
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> Nuevas notificaciones 
           
          </a>
          
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $URL;?>" class="brand-link">
      <img src="<?php echo $URL;?>/public/images/logo-icono3.png" alt="Logo-tipo personal" class="brand-image img-circle elevation-3" style="opacity: .8"> <!-- aqui va el logotipo-->
      <span class="brand-text font-weight-light">Turnos laborales</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $nombres_sesion?></a> <!--aqui pegamos la variable que viene de la consultapara mostrar el nombre -->
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active"> 
              <i class="nav-icon fas fa-user"></i>
              <p>
                Empleado
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/turnos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Turnos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/cambios.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cambios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/datos_personales.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Datos personales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/actualizar.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Actualizar</p>
                </a>
              </li>
              <li class="nav-item"> <!-- esta parte puede ir para el rol de lider  -->
                <a href="<?php echo $URL;?>/usuarios/listado_usuarios.php" class="nav-link"> <!-- ESTA ES SOLO INDEX EJEMPLO-->
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de usuarios</p>
                </a>
              </li>
              <li class="nav-item"><!--esta parte puede ir para el rol de lider  -->
                <a href="<?php echo $URL;?>/usuarios/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de usuarios</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo $URL;?>/controllers/login/cerrar_sesion.php" class="nav-link" style="background-color: #ca0a0b;"><!-- aqui redireccionamos al controlador con la variable global $URL para salir-->
              <i class="nav-icon fas fa-door-closed"></i>
              <p>
                Salir
              </p>
            </a>
          </li>
          
        </ul>
        <div class="reloj">
                    <p class="fecha"></p>
                    <p class="tiempo"></p>
                </div>
      </nav>
      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>