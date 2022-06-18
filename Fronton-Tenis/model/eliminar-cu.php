<?php
include '../controller/dbconnect.php';
$id_club = $_GET['id_club'];
$sql = "DELETE FROM club  where id_club like $id_club";
$res =mysqli_query($con,$sql);
    if(!$res){
        echo "No se Elimino";
    }
    else{
        echo '<script>
                alert("Datos Eliminados con exito");
                window.location="../view/admin-club.php";
                </script>'
                ;
                exit();
    }
    ?>
