<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AVVO | Technology</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../public/css/index.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- aqui va la libreria de sweetalert2 -->
</head>
<body class="hold-transition login-page" style="background-color: gray;">
<div class="login-box">
  <!-- /.login-logo -->

  <?php // creamos codigo php que nos pregunte si existe una sesion y si existe que mande el mensaje
  session_start(); // se debe iniciar sesion
  if (isset($_SESSION['mensaje'])) { // pregunta si existe esa sesion mensaje
    $respuesta = $_SESSION['mensaje']; ?> <!-- almacenamos el mensaje de error en esta variable, adicional debemos cerrar php para poner el script pero concatenadolo mas abajito-->
    <script>
      Swal.fire({
  icon: "error",
  title: "Oops... <br> Algo salio mal <br> Ingresa tus datos nuevamente",
});
    </script>
    <?php // aqui se concatena con la llave dentro
  }
  
  ?>
  <div class="card card-outline card-primary" style="box-shadow: 7px 13px 37px #000"> 
  <center>
  <img src="../public/images/logoparalamaquetacion.png" alt="" width="180px">
  </center>
    <div class="card-header text-center">
      <a href="../public/templates/AdminLTE-3.2.0/index2.html" class="h1"><b>Turnos</b>Laborales</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Inicia tu sesión</p>

      <form action="../controllers/login/ingreso.php" method="post"> <!-- aqui esta el controlador -->
        <div class="input-group mb-3">
          <input type="text" name="usuario" class="form-control" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_user" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
