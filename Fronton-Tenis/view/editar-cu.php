<?php
include '../controller/dbconnect.php';
session_start();
$id = $_GET['id_club'];
$consulta = mysqli_query($con, "SELECT * FROM club WHERE id_club = '$id';");	
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

<center> <h1>Editar Club</h1></center>
   <div class="form23">
    <div class="container6">
        <form action="../model/editar-cu.php" method="POST" enctype="multipart/form-data">
           <?php
                $query="SELECT * FROM club WHERE 
                id_club = '$id'";
                $resultado=$con->query($query);
                while ($mostrar=$resultado->fetch_assoc()){
            ?>
                    <input type="hidden" name="id_club" class="form-control"  value="<?php echo $mostrar["id_club"] ?>" >
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" class="form-control"  value="<?php echo $mostrar["nombre"] ?>" >
                    
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control"  value="<?php echo $mostrar["email"] ?>" ><br>
                    <label for="">Dirección</label>
                    <input type="text" name="direccion" class="form-control"  value="<?php echo $mostrar["direccion"] ?>" ><br>
                    <label for="">Ciudad</label>
                    <input type="text" name="telefono"  class="form-control" value="<?php echo $mostrar["telefono"] ?>" >
                    
                    <?php }?><br><br>
                    <input type="submit" class="form-control" style=" background-color:#2391ef;
    color:white;"  value="Guardar">
                    
       </form>
    </div>  
  </div>
</body>
</html>