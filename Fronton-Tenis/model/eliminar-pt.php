<?php
include '../controller/dbconnect.php';
$id_pt = $_GET['id_inscripcion'];
	
$sql = "DELETE FROM inscripcion  where id_inscripcion like $id_pt";
$res =mysqli_query($con,$sql);
    if(!$res){
        echo "No se Elimino";
    }
    else{
        header("Location:../view/torneos-club.php");
    }
    ?>
    