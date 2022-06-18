<?php
include '../controller/dbconnect.php';
include '../controller/datos.php';

$id4=$_GET['id_club'];
$estado=$_GET['estado'];
$querye="UPDATE `club` set estado = '$estado' 
         WHERE id_club='$id4'";
mysqli_query($con,$querye);
header('location:../view/admin-club.php');
?>