<?php
include '../controller/dbconnect.php';
session_start();
$id = $_GET['id_torneo'];
$consulta = mysqli_query($con, "SELECT * FROM torneos WHERE id_torneo = '$id';");	
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
  
<center><h1>Editar Torneo</h1></center>
   <div class="form23">
        <form action="../model/edit-tra.php" method="POST" enctype="multipart/form-data">
           <?php
                $query="SELECT * FROM torneos WHERE 
                id_torneo = '$id'";
                $resultado=$con->query($query);
                while ($mostrar=$resultado->fetch_assoc()){
            ?>
              <input type="hidden" name="id_torneo"  class="form-control"  value="<?php echo $mostrar["id_torneo"] ?>"  >
              <input type="hidden" name="club_creador" class="form-control"   value="<?php echo $mostrar["club_creador"] ?>"  >
              <label for="">Título</label>
              <input type="text" name="titulo" class="form-control"   value="<?php echo $mostrar["titulo"] ?>" ><br>
              <label for="">Descripción</label>
              <input type="text" name="descripcion"  class="form-control"  value="<?php echo $mostrar["descripcion"] ?>" ><br>
              <label for="">Ubicación</label><br>
              <input type="text" name="ubicacion"  class="form-control"  value="<?php echo $mostrar["ubicacion"] ?>" >
              <label for="">Provincia</label><br>
              <input type="text" name="provincia"  class="form-control"  value="<?php echo $mostrar["provincia"] ?>" >
              <label for="">País</label><br>
              <input type="text" name="pais"  class="form-control"  value="<?php echo $mostrar["pais"] ?>" >
              <?php }?><br><br>
              <input type="submit" class="form-control" style=" background-color:#2391ef;
    color:white;"  value="Guardar">
     
    </form>
     </div>
  
</body>
</html>