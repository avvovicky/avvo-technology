<?php

  include ('../controllers/conexion.php'); // se incluye conexion para conectar bd 

  include ('../layout/sesion.php'); // aqui incluimos el archivo de iniciar sesion

  include ('../layout/parte1.php'); 
  
  include ('../controllers/usuarios/update_usuario.php'); // se incluye el controlador del update_usuarios
 
    
  ?>  <!-- aqui incluimos la parte superior y lateral del navbar y sidebar y cerramos el php-->

  <!-- aqui vamos a pegar el contenido de la pagina en particular--> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">ACTUALIZACIÓN DEL EMPLEADO</h1>
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
        <div class="card card-success"> <!-- aqui le podemos cambiar el color-->
              <div class="card-header">
                <h3 class="card-title">Actualizar Datos</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
              </div>
                <div class="card-body" style="display: block;">
                  <div class="row">
                    <div class="col-md-12">
                    <form action="../controllers/usuarios/update.php" method="post"> <!--se envia al controlador update -->
                            <input type="text" name="id_usuario" value="<?php echo $id_usuario_get;?>" hidden><!--se pculta con hidden para que solo lo vea el programador -->
                        <div class="form-group"> <!-- lo sacamos de bootstrap-->
                          <label for="">Usuario</label>
                          <input type="text" name="usuario" class="form-control" value="<?php echo $usuario;?>" placeholder="Escribe el usuario" required><!-- lo sacamos de bootstrap, se pasan los valores del controlador-->
                        </div>
                        <div class="form-group"> <!-- lo sacamos de bootstrap-->
                          <label for="">Nombres</label>
                          <input type="text" name="nombres" class="form-control" value="<?php echo $nombres;?>" placeholder="Escribe los nombres" required>
                        </div>
                        <div class="form-group"> <!-- lo sacamos de bootstrap-->
                          <label for="">Apellidos</label>
                          <input type="text" name="apellidos" class="form-control" value="<?php echo $apellidos;?>" placeholder="Escribe los apellidos" required>
                        </div>
                        <div class="form-group"> <!-- lo sacamos de bootstrap-->
                          <label for="">Correo</label>
                          <input type="email" name="email" class="form-control" value="<?php echo $email;?>" placeholder="Escribe el correo" required>
                        </div>
                        <div class="form-group"> <!-- lo sacamos de bootstrap-->
                          <label for="">Teléfono</label>
                          <input type="text" name="telefono" class="form-control" value="<?php echo $telefono;?>" placeholder="Escribe el teléfono" required>
                        </div>
                        <div class="form-group"> <!-- lo sacamos de bootstrap-->
                          <label for="">Contraseña</label>
                          <input type="text" name="password_user" class="form-control"><!-- lo sacamos de bootstrap-->
                        </div>
                        <div class="form-group"> <!-- lo sacamos de bootstrap-->
                          <label for="">Repite la contraseña</label>
                          <input type="text" name="password_repeat" class="form-control"><!-- lo sacamos de bootstrap-->
                        </div>
                        <hr>
                        <a class="btn btn-secondary" href="listado_usuarios.php">Cancelar</a>
                        <button type="submit" class="btn btn-success">Actualizar</button>
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

  <?php include ('../layout/mensajes.php'); // se pega el layout de los mensajes?>
  <?php include ('../layout/parte2.php'); // aqui pegamos la parte 2 que es el footer abriendo y cerrando php?>