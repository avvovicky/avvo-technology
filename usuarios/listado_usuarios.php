<?php

  include ('../controllers/conexion.php'); // se incluye conexion para conectar bd 

  include ('../layout/sesion.php'); // aqui incluimos el archivo de iniciar sesion

  include ('../layout/parte1.php'); ?>  <!-- aqui incluimos la parte superior y lateral del navbar y sidebar y cerramos el php-->

  <!-- aqui vamos a pegar el contenido de la pagina en particular--> 

  <?php
  include('../controllers/usuarios/listado_de_usuarios.php');// aqui se incluye el controlador de listado de usuarios
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">LISTADO DE EMPLEADOS</h1>
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <div class="row"> <!-- aqui se crea una columna de bootstrap-->
          <div class="col-md-12">
            <div class="card card-primary"> <!-- aqui le podemos cambiar el color-->
              <div class="card-header">
                <h3 class="card-title">Empleados registrados</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
              </div>
                <div class="card-body" style="display: block;">
                <table id="table_usuarios" class="table table-bordered table-striped"> <!-- el id debe ser unico y es el que trae el script de js para las funcionalidaes del datatable -->
                      <thead>
                      <tr>
                      <th><center>Nro</center></th>
                      <th><center>Usuario</center></th>
                      <th><center>Nombres</center></th>
                      <th><center>Apellidos</center></th>
                      <th><center>Correo</center></th>
                      <th><center>Telefono</center></th>
                      <th><center>Acciones</center></th>
                    </tr>
                      </thead>
                      <tbody>
                        <?php
                        $contador = 0;
                          foreach($usuarios_datos as $usuarios_dato){ 
                            $id_usuario = $usuarios_dato['id_usuario']; // aqui se guarda el id para entrar a todos los registro de la base de datos
                            ?> <!-- se debe abrir y cerra php para dentro poner codigo html de la informacion de los usuarios-->
                            <tr>
                              <td><center><?php echo $contador = $contador + 1;?></center></td> <!--aqui ponemos las variables pero desde la base de datos, como aparecen en phpmyadmin -->
                                <td><?php echo $usuarios_dato['usuario'];?></td> <!--aqui ponemos las variables pero desde la base de datos, como aparecen en phpmyadmin -->
                                <td><?php echo $usuarios_dato['nombres'];?></td> <!--aqui ponemos las variables pero desde la base de datos, como aparecen en phpmyadmin -->
                                <td><?php echo $usuarios_dato['apellidos'];?></td> <!--aqui ponemos las variables pero desde la base de datos, como aparecen en phpmyadmin -->
                                <td><?php echo $usuarios_dato['email'];?></td> <!--aqui ponemos las variables pero desde la base de datos, como aparecen en phpmyadmin -->
                                <td><?php echo $usuarios_dato['telefono'];?></td> <!--aqui ponemos las variables pero desde la base de datos, como aparecen en phpmyadmin CLASE10 --> 
                                <td>
                                  <center>
                                  <div class="btn-group"> <!-- esto lo sacamos de adminlte-->
                                    <a href="show.php?id=<?php echo $id_usuario;?>" type="button" class="btn btn-info"><i class="fa fa-eye"></i> Ver</a> <!-- se le agrega la etiqueta i para poner el icono y la clase de boostrap-->
                                    <a href="update.php?id=<?php echo $id_usuario;?>" type="button" class="btn btn-success"><i class="fa fa-pencil-alt"></i> Editar</a> <!-- se manda el id del usuario para tener la informacion-->
                                    <a href="delete.php?id=<?php echo $id_usuario;?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</a>
                                  </div>
                                  </center>
                                </td>  
                            </tr>
                        <?php
                          }
                        ?>
                      </tbody>
                          <tfoot>
                          <tr>
                      <th><center>Nro</center></th>
                      <th><center>Usuario</center></th>
                      <th><center>Nombres</center></th>
                      <th><center>Apellidos</center></th>
                      <th><center>Correo</center></th>
                      <th><center>Telefono</center></th>
                      <th><center>Acciones</center></th>
                    </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
          </div> <!-- aqui le ponemos las columnas-->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Page specific script -->

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

  <?php include ('../layout/mensajes.php'); // pegamos el layout de mensaje?>
  <?php include ('../layout/parte2.php'); // aqui pegamos la parte 2 que es el footer abriendo y cerrando php?>

  <script>
   $(function () {
    $("#table_usuarios").DataTable({
      "pageLength": 5, /* aqui se le cambia la paginacion */ 
          language: {
              "emptyTable": "No hay información", // este script es para cambiar el idioma en la datatable
              "decimal": "",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ empleados",
              "infoEmpty": "Mostrando 0 to 0 of 0 empleados",
              "infoFiltered": "(Filtrado de _MAX_ total empleados)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ empleados",
              "loadingRecords": "Cargando...",
              "processing": "Procesando...",
              "search": "Buscador:",
              "zeroRecords": "Sin resultados encontrados",
              "paginate": {
                  "first": "Primero",
                  "last": "Ultimo",
                  "next": "Siguiente",
                  "previous": "Anterior"
              }
             },
      "responsive": true, "lengthChange": true, "autoWidth": false,
      buttons: [{
        extend: 'collection',
        text: 'Reportes',
        orientation: 'landscape',
        buttons: [{
          text: 'Copiar',
          extend: 'copy',
        },{
          extend: 'pdf'
        }, {
          extend: 'csv'
        },{
          extend: 'excel'
        }, {
          text: 'Imprimir',
          extend: 'print'
        }
        ]
      },
      {
        extend: 'colvis',
        text: 'visor de columnas',
        collectionLayout: 'fixed three-column'
      }
],
    }).buttons().container().appendTo('#table_usuarios_wrapper .col-md-6:eq(0)');
  });
</script>

  