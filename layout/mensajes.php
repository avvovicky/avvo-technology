<?php

if((isset($_SESSION['mensaje'])) && (isset($_SESSION['icono'])) ){  // si existe esta sesion... 
    $respuesta = $_SESSION['mensaje']; 
    $icono = $_SESSION['icono']; 
    ?>
     <script>
      Swal.fire({
  icon: "<?php echo $icono;?>",
  title: "<?php echo $respuesta;?>",
  showConfirmButton: false,
  timer: 2500
});
    </script>

<?php
  unset($_SESSION['mensaje']); // variable prioa de php que elimina una sesion de una variable especifica 
  unset($_SESSION['icono']); // variable prioa de php que elimina una sesion de una variable especifica 
  } 


?>