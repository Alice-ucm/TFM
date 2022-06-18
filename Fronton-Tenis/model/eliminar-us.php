<?php
include '../controller/dbconnect.php';
$id_usuario = $_GET['id_usuario'];
$sql = "DELETE FROM users  where id_usuario like $id_usuario";
$res =mysqli_query($con,$sql);
    if(!$res){
        echo "No puede eliminar usuario.";
    }
    else{
        header("Location:../view/usuarios.php");
    }
    ?>
    