<?php
include '../controller/dbconnect.php';
session_start();
$id = $_GET['id_cancha'];
$consulta = mysqli_query($con, "SELECT * FROM cancha WHERE id_cancha = '$id';");	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="../css/bootstrap.css">
	<!-- //css files -->
	<style>
    .form23{
    background: #368185 !important;
    margin-left: 20%;
    margin-top: 20px;
    padding-top: 3%;
    padding-left: 3%;
    padding-right: 3%;
    padding-bottom: 2%;
    margin-right: 20%;
  }
    </style>
</head>
<body>

<center><h1>Editar Cancha</h1></center>
   
   <div class="form23">
        <form action="../model/edit-canchac.php" method="POST" enctype="multipart/form-data">
           <?php
                $query="SELECT * FROM cancha WHERE 
                id_cancha = '$id'";
                $resultado=$con->query($query);
                while ($mostrar=$resultado->fetch_assoc()){
            ?>
                  <input type="hidden" name="id_cancha"   value="<?php echo $mostrar["id_cancha"] ?>" >
                     <label for="">Nombre</label>
                     
                      <input type="text" name="nombre"  class="form-control" value="<?php echo $mostrar["nombre"] ?>" >
                        <input type="hidden" name="club_creador"   value="<?php echo $mostrar["club_creador"] ?>" >
                          <label for="">Ubicación</label>
                           <input type="text" name="ubicacion"  class="form-control" value="<?php echo $mostrar["ubicacion"] ?>" ><br>
                             <label for="">Provincia</label>
                             <input type="text" name="provincia" class="form-control"  value="<?php echo $mostrar["provincia"] ?>" ><br>
                           <label for="">Ciudad</label>
                         <input type="text" name="ciudad"  class="form-control" value="<?php echo $mostrar["ciudad"] ?>" ><br><br>
                      Se recomienda no superar el máximo de 150KB 
                         <input type="file"  name="foto1"/><br>
                    <label class="contact-p1">Imagen  </label>
	              <input type="file"  name="foto2" />
             <?php
               }
             ?><br><br>
             <div >
             <input type="submit" class="form-control" style=" background-color:#2391ef;
    color:white;"  value="Guardar">
            </div>
        </form>
    </div>
 
 
</body>

</html>