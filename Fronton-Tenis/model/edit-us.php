<?php
include '../controller/dbconnect.php';
include '../controller/datos.php';

$id4=$_POST['id_usuario'];
$nombre=$_POST['name'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$pass=$_POST['password'];
$querye="UPDATE `users` set name='$nombre' , apellido='$apellido' , email='$email', password='$pass'
         WHERE id_usuario='$id4'";
mysqli_query($con,$querye);
if(!$querye){
    echo"No se Modifico";
}
else{
    echo '<script>
                alert("Datos actualizados con exito");
                window.location="../view/usuarios.php";
                </script>'
                ;
                exit();
}

?>
