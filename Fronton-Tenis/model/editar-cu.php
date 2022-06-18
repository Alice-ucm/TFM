<?php
include '../controller/dbconnect.php';
include '../controller/datos.php';

$id4=$_POST['id_club'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$dir=$_POST['direccion'];
$querye="UPDATE `club` set nombre='$nombre' , email='$email', direccion='$dir'
         WHERE id_club='$id4'";
mysqli_query($con,$querye);
if(!$querye){
    echo"No se Modifico";
}
else{
    echo '<script>
                alert("Datos actualizados con exito");
                window.location="../view/admin-club.php";
                </script>'
                ;
                exit();
}

?>
