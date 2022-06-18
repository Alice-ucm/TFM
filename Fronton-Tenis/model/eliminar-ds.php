<?php
include '../controller/dbconnect.php';
$id_desc = $_GET['id_desc'];
$sql = "DELETE FROM desempeño  where id_desc like $id_desc";
$res =mysqli_query($con,$sql);
    if(!$res){
        echo "No se Elimino";
    }
    else{
        header("Location:../view/desempeño.php");
    }
    ?>