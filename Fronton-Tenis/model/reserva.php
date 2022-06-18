<?php 
include '../controller/dbconnect.php';
$cancha = $_POST['id_cancha'];
$usuario = $_POST['id_usuario'];
$fecha = $_POST['fecha'];
$hora_inicio = $_POST['hora_inicio'];
$estado = $_POST['estado'];
$query="INSERT INTO reserva_cancha(id_cancha,id_usuario,fecha,hora_inicio,estado)
        VALUES('$cancha','$usuario','$fecha','$hora_inicio','$estado')"  ;

$verificar=mysqli_query($con,"SELECT * FROM reserva_cancha WHERE fecha='$fecha' AND  hora_inicio='$hora_inicio'");
// Verifica esta disponible esta reserva
    if(mysqli_num_rows($verificar)>0){
        echo '<script>
                alert("Disculpe,ya esta reservado");
                window.location="../view/canchas.php";
                </script>'
                ;
                exit();
    }
    $ejecutar=mysqli_query($con,$query);
    if($ejecutar){
        echo '<script>
        alert("Ya esta su reserva");
        window.location="../view/canchas.php";
        </script>'
        ;
    }
    else{
        echo '<script>
        alert("No esta disponible");
        window.location="../view/canchas.php";
        </script>'
        ;
    }
    ?>

    