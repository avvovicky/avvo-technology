<?php

  include ('../controllers/conexion.php'); // se incluye conexion para conectar bd 

  include ('../layout/sesion.php'); // aqui incluimos el archivo de iniciar sesion

  include ('../layout/parte1.php'); 
  
  include ('../controllers/usuarios/show_usuario.php'); // se incluye el controlador del show_usuarios
 
    
  ?>  <!-- aqui incluimos la parte superior y lateral del navbar y sidebar y cerramos el php-->

  <!-- aqui vamos a pegar el contenido de la pagina en particular--> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">ELIMINAR EMPLEADO</h1>
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
      <div class="row">
        <div class="col-sm-5">
        <div class="card card-danger"> <!-- aqui le podemos cambiar el color-->
              <div class="card-header">
                <h3 class="card-title">¿Esta seguro de eliminar al empleado?</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
              </div>
                <div class="card-body" style="display: block;">
                  <div class="row">
                    <div class="col-md-12">
                        <form action="../controllers/usuarios/delete_usuario.php" method="post">
                            <input type="text" name="id_usuario" value="<?php echo $id_usuario_get;?>" hidden> <!--el id lo recuperamos del controlador update_usuario, se iculta con hidden -->
                        <div class="form-group"> <!-- lo sacamos de bootstrap-->
                          <label for="">Usuario</label>
                          <input type="text" name="usuario" class="form-control" value="<?php echo $usuario;?>" disabled> <!-- aqui pegamos la informacion para que se muestr y no se pueda modificar -->
                        </div>
                        <div class="form-group"> <!-- lo sacamos de bootstrap-->
                          <label for="">Nombres</label>
                          <input type="text" name="nombres" class="form-control" value="<?php echo $nombres;?>" disabled>
                        </div>
                        <div class="form-group"> <!-- lo sacamos de bootstrap-->
                          <label for="">Apellidos</label>
                          <input type="text" name="apellidos" class="form-control" value="<?php echo $apellidos;?>" disabled>
                        </div>
                        <div class="form-group"> <!-- lo sacamos de bootstrap-->
                          <label for="">Correo</label>
                          <input type="email" name="email" class="form-control" value="<?php echo $email;?>" disabled>
                        </div>
                        <div class="form-group"> <!-- lo sacamos de bootstrap-->
                          <label for="">Teléfono</label>
                          <input type="text" name="telefono" class="form-control" value="<?php echo $telefono;?>" disabled>
                        </div>
                        <hr>
                        <a class="btn btn-secondary" href="listado_usuarios.php">Volver</a>
                        <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

  <?php include ('../layout/mensajes.php'); // aqui pegamos los mensajes?>
  <?php include ('../layout/parte2.php'); // aqui pegamos la parte 2 que es el footer abriendo y cerrando php?>