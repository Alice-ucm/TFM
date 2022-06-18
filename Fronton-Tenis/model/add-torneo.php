<?php 
include("../controller/dbconnect.php");

$club = $_POST['club_creador'];
$descripcion = $_POST['descripcion'];
$estado = $_POST['estado'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$imagen2 = addslashes(file_get_contents($_FILES['imagen2']['tmp_name']));
$pais = $_POST['pais'];
$provincia = $_POST['provincia'];
$titulo = $_POST['titulo'];
$ubicacion = $_POST['ubicacion'];
$sport = $_POST['id_sport'];
$fecha = $_POST['fecha'];

$query="INSERT INTO torneos(club_creador,descripcion,estado,imagen,imagen2, pais, provincia,titulo,ubicacion,id_sport,fecha) 
VALUES('$club','$descripcion','$estado','$imagen','$imagen2','$pais','$provincia','$titulo','$ubicacion','$sport','$fecha')"  ;
$resultado= $con ->query($query);

    if($resultado){
        header("Location:../view/torneos-club.php");
    }
    else{
        echo "No se agrego";
    }
    ?>

    