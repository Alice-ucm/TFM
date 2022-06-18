<?php
include '../controller/dbconnect.php';
$id = $_POST['id_torneo'];
$club = $_POST['club_creador'];
$descripcion = $_POST['descripcion'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];
$provincia = $_POST['provincia'];
$titulo = $_POST['titulo'];
$ubicacion = $_POST['ubicacion'];
$sport = $_POST['id_sport'];
$fecha = $_POST['fecha'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$imagen2 = addslashes(file_get_contents($_FILES['imagen2']['tmp_name']));

$query="UPDATE  `torneos` SET  club_creador='$club', descripcion='$descripcion', estado='$estado', imagen='$imagen',imagen2='$imagen2', pais='$pais', provincia='$provincia', titulo='$titulo', ubicacion='$ubicacion', id_sport='$sport', fecha='$fecha') WHERE id_torneo='$id'"  ;
mysqli_query($con,$query);
header('location:../view/torneos-club.php');
    ?>