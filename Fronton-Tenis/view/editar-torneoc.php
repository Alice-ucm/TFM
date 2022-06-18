<?php
include '../controller/dbconnect.php';
session_start();
$id = $_GET['id_torneo'];
$consulta = mysqli_query($con, "SELECT * FROM users WHERE id_torneo = '$id';");	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    	<!-- style css -->
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="../css/bootstrap.css">
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
        <form action="../model/edit-trc.php" method="POST" enctype="multipart/form-data">
           <?php
                $query="SELECT * FROM torneos WHERE 
                id_torneo = '$id'";
                $resultado=$con->query($query);
                while ($mostrar=$resultado->fetch_assoc()){
            ?>
                <input type="hidden" name="id_torneo"   value="<?php echo $mostrar["id_torneo"] ?>" >
                    <label for="">Nombre</label>
                      <input type="text" name="titulo" class="form-control"  value="<?php echo $mostrar["titulo"] ?>" >
                        <input type="hidden" name="club_creador" class="form-control"  value="<?php echo $mostrar["club_creador"] ?>" >
                          <label for="">Descripcion</label>
                           <input type="text" name="descripcion" class="form-control"  value="<?php echo $mostrar["descripcion"] ?>" ><br>
                            <label for="">País</label>
                             <input type="text" name="pais" class="form-control"  value="<?php echo $mostrar["pais"] ?>" ><br>
                             <label for="">Provincia</label>
                             <input type="text" name="provincia" class="form-control"  value="<?php echo $mostrar["provincia"] ?>" ><br>
                            
                             <label for="">Ubicación</label>
                           <input type="text" name="ubicacion"  class="form-control" value="<?php echo $mostrar["ubicacion"] ?>" ><br>
                         <label for="">Fecha</label>
                        <input type="date" name="fecha" class="form-control"  value="<?php echo $mostrar["fecha"] ?>" >
                        <label for="">Fecha</label>
                         <select id="estado" name="estado" style="width: 200px;">
                              <option value="1">Abierto</option>
                              <option value="0">Terminado</option>
                              </select> 
                    <?php
                      }
                      ?><br><br>
                <input type="submit" class="form-control" style=" background-color:#2391ef;color:white;"  value="Guardar">
       </form>
  </div>

</body>
</body>
</html>