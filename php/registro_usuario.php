<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];

$valor = $_POST['valor'];


$query= "INSERt INTO usuarios(nombre_completo ,correo ,valor)
VALUES('$nombre_completo', '$correo', '$valor')";

$ejecutar = mysqli_query($conexion, $query);

                                                                         




//registro
 if($ejecutar){
    echo '
      <script>
      
      window.location="../index.html";
      </script>
    ';
   }
mysqli_close($conexion);


?>