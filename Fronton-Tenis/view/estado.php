<?php
include '../controller/dbconnect.php';
include '../controller/datos.php';

$id4=$_GET['id_reserva_cancha'];
$estado=$_GET['estado'];
$querye="UPDATE `reserva_cancha` set estado = '$estado' 
         WHERE id_reserva_cancha='$id4'";
mysqli_query($con,$querye);
header('location:canchas.php');
?>

