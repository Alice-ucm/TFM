<?php
include '../controller/dbconnect.php';
include '../controller/datos.php';

$id=$_POST['id_cancha'];
$club=$_POST['club_creador'];
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$ubicacion=$_POST['ubicacion'];
$provincia=$_POST['provincia'];
$foto1 = addslashes(file_get_contents($_FILES['foto1']['tmp_name']));
$foto2 = addslashes(file_get_contents($_FILES['foto2']['tmp_name']));

$querye="UPDATE `cancha` set club_creador='$club' , nombre='$nombre' ,
 ciudad='$ciudad', ubicacion='$ubicacion',provincia='$provincia', foto1='$foto1',foto2='$foto2'
         WHERE id_cancha='$id'";

mysqli_query($con,$querye);
if(!$querye){
    echo"No se Modifico";
}
else{
    echo '<script>
                alert("Datos actualizados con exito");
                window.location="../view/canchas-club.php";
                </script>'
                ;
                exit();
}

?>