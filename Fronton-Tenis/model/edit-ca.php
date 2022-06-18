<?php
include '../controller/dbconnect.php';
include '../controller/datos.php';

$id=$_POST['id_cancha'];
$club=$_POST['club_creador'];
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$ubicacion=$_POST['ubicacion'];
$provincia=$_POST['provincia'];


$querye="UPDATE `cancha` set club_creador='$club' , nombre='$nombre' ,
 ciudad='$ciudad', ubicacion='$ubicacion',provincia='$provincia'
         WHERE id_cancha='$id'";

mysqli_query($con,$querye);
if(!$querye){
    echo"No se Modifico";
}
else{
    echo '<script>
                alert("Datos actualizados con exito");
                window.location="../view/admin-cancha.php";
                </script>'
                ;
                exit();
}

?>