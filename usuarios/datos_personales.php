<?php

  include ('../controllers/conexion.php'); // se incluye conexion para conectar bd 

  include ('../layout/sesion.php'); // aqui incluimos el archivo de iniciar sesion

  include ('../layout/parte1.php'); ?>  <!-- aqui incluimos la parte superior y lateral del navbar y sidebar y cerramos el php-->

  <!-- aqui vamos a pegar el contenido de la pagina en particular--> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">DATOS PERSONALES</h1>
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      contenido del sistema
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

  <?php include ('../layout/parte2.php'); // aqui pegamos la parte 2 que es el footer abriendo y cerrando php?>