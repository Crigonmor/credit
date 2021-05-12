<?php
 require 'conexion.php';

 $nombre  = $_POST['nombre'];
 $missatge  = $_POST['missatge'];
 $email = $_POST['email'];


$insertar = "INSERT INTO clientes VALUES ('$nombre','$missatge','$email') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('Has enviat correctament el missatge');
    location.href = '../contacte.php';
   </script>";

}else{
    echo "<script> alert('No sa pogut enviar correctament el missatge');
    location.href = '../contacte.php';
    </script>";
}






?>
