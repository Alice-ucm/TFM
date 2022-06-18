<?php
include '../controller/dbconnect.php';
$id_torneo = $_GET['id_torneo'];
	
$sql = "DELETE FROM torneos  where id_torneo like $id_torneo";
$res =mysqli_query($con,$sql);
    if(!$res){
        echo "No se Elimino";
    }
    else{
        header("Location:../view/torneos-club.php");
    }
    ?>