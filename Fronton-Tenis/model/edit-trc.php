<?php
include '../controller/dbconnect.php';
include '../controller/datos.php';

$id7=$_POST['id_torneo'];
$club=$_POST['club_creador'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$pais=$_POST['pais'];
$provincia=$_POST['provincia'];
$ubicacion=$_POST['ubicacion'];
$fecha=$_POST['fecha'];
$estado=$_POST['estado'];
$querye="UPDATE `torneos` set titulo='$titulo' , descripcion='$descripcion' , pais='$pais', club_creador='$club', ubicacion='$ubicacion' , estado='$estado' , fecha='$fecha', provincia='$provincia'
         WHERE id_torneo='$id7'";

mysqli_query($con,$querye);
if(!$querye){
    echo"No se Modifico";
}
else{
    echo '<script>
                alert("Datos actualizados con exito");
                window.location="../view/torneos-club.php";
                </script>'
                ;
                exit();
}

?>