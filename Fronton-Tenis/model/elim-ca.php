<?php
include '../controller/dbconnect.php';
$id_cancha = $_GET['id_cancha'];
$sql = "DELETE FROM cancha  where id_cancha like $id_cancha";
$res =mysqli_query($con,$sql);
    if(!$res){
        echo "No se Elimino";
    }
    else{
        header("Location:../view/admin-cancha.php");
    }
    ?> 
    