<?php
include '../controller/dbconnect.php';
$id_rv = $_GET['id_reserva_cancha'];
	
$sql = "DELETE FROM reserva_cancha  where id_reserva_cancha like $id_rv";
$res =mysqli_query($con,$sql);
    if(!$res){
        echo "No se Elimino";
    }
    else{
        header("Location:../view/canchas.php");
    }
    ?>