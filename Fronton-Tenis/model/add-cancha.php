<?php 

include("../controller/dbconnect.php");
$id1 = $_POST['club_creador'];
$nombre = $_POST['nombre'];
$ciudad = $_POST['ciudad'];
$provincia = $_POST['provincia'];
$ubicacion = $_POST['ubicacion'];
$map = $_POST['map'];
$id1 = $_POST['club_creador'];
$foto1 = addslashes(file_get_contents($_FILES['foto1']['tmp_name']));
$foto2 = addslashes(file_get_contents($_FILES['foto2']['tmp_name']));

$query="INSERT INTO cancha(club_creador,nombre,ciudad, provincia, ubicacion, map,foto1,foto2) VALUES('$id1','$nombre','$ciudad','$provincia','$ubicacion','$map','$foto1','$foto2')"  ;
$resultado= $con ->query($query);

if($resultado){
    header("Location:../view/canchas-club.php");
}
else{
    echo "No se agrego";
}
?>
