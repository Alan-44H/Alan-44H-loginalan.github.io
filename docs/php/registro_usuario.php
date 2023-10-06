<?php

include 'conexion.php';

$nombre_completo = $_POST['nombre_completo'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuario(nombre_completo, apellido, email, telefono, direccion, contrasena)
          VALUES('$nombre_completo', '$apellido', '$email', '$telefono', '$direccion', '$contrasena')";

$ejecutar = mysqli_query($conexion, $query); 

if($ejecutar){
    echo '
      <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../index.php";
      </script>
    
    ';
}else{
    echo '
      <script>
            alert("Intentalo de nuevo usuario no almacenado");
            window.location = "../index.php";
      </script>
    
    ';

mysqli_close($conexion);
    
}


?>