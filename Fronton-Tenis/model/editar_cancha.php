<?php

$id_cancha = $_POST['id_cancha'];
$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];

    $con = mysqli_connect("localhost","root","","app-social");
	$sql = "UPDATE cancha set nombre='$nombre', ubicacion='$ubicacion' where id_cancha like $id_cancha";
	$res =mysqli_query($con,$sql);
    if(!$res){
        echo"No se Modifico";
    }
    else{
        header("Location:view/cancha.php");
    }
    ?>