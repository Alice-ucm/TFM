<?php
include '../controller/dbconnect.php';
include '../controller/datos.php';

$id4=$_GET['id_usuario'];
$estado=$_GET['estado'];
$querye="UPDATE `users` set estado = '$estado' 
         WHERE id_usuario='$id4'";
mysqli_query($con,$querye);
header('location:../view/usuarios.php');
?>
