<?php
include '../controller/dbconnect.php';
$id_can = $_GET['id_cancha'];
	
$sql = "DELETE FROM cancha  where id_cancha like $id_can";
$res =mysqli_query($con,$sql);
    if(!$res){
        echo "No se Elimino";
    }
    else{
        header("Location:../view/canchas-club.php");
    }
    
    ?>