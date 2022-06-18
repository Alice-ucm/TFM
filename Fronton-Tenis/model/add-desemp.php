<?php 
include("../controller/dbconnect.php");
$sport = $_POST['id_sport'];
$fecha = $_POST['fecha'];
$usuario = $_POST['id_usuario'];
$score = $_POST['score'];
$tipo = $_POST['tipo'];

$query="INSERT INTO desempeño(id_sport,fecha,score,tipo,id_usuario) 
        VALUES('$sport','$fecha','$score','$tipo','$usuario')";
$resultado= $con ->query($query);

    if($resultado){
        header("Location:../view/desempeño.php");
    }
    else{
        echo "No se agrego";
    }
    ?>