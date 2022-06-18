<?php 
include '../controller/dbconnect.php';
$id3 = $_POST['id_torneo'];
$usuario = $_POST['id_usuario'];
$query="INSERT INTO inscripcion(id_torneo,id_usuario) VALUES('$id3','$usuario')"  ;
// Verifica si el usuario ya esta registrado en el torneo
$verificar=mysqli_query($con,"SELECT * FROM inscripcion WHERE id_usuario='$usuario' AND  id_torneo='$id3' ");

    if(mysqli_num_rows($verificar)>0){
        echo '<script>
                alert("Disculpe,ya esta registrado en este torneo");
                window.location="../view/torneos.php";
                </script>'
                ;
                exit();
    }
    $ejecutar=mysqli_query($con,$query);
    if($ejecutar){
        echo '<script>
        alert("Muchas gracias por su inscripción!");
        window.location="../view/torneos.php";
        </script>'
        ;
    }
    else{
        echo '<script>
        alert("Duplicado");
        window.location="../view/torneos.php";
        </script>'
        ;
    }
    ?>
    

    