<?php
include '../controller/dbconnect.php';
session_start();
$id = $_GET['id_usuario'];
$consulta = mysqli_query($con, "SELECT * FROM users WHERE id_usuario = '$id';");	
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
<center><h1>Editar Usuario</h1></center>
  <div class="form23">
      <form action="../model/edit-us.php" method="POST" enctype="multipart/form-data">
           <?php
                $query="SELECT * FROM users WHERE 
                id_usuario = '$id'";
                $resultado=$con->query($query);
                while ($mostrar=$resultado->fetch_assoc()){
            ?>
                <input type="hidden" name="id_usuario" class="form-control" value="<?php echo $mostrar["id_usuario"] ?>"  >
                <label for="">Nombre</label>
                <input type="text" name="name"  class="form-control" value="<?php echo $mostrar["name"] ?>" ><br>
                <label for="">Apellido</label>
                <input type="text" name="apellido"  class="form-control" value="<?php echo $mostrar["apellido"] ?>" ><br>
                <label for="">Email</label><br>
                <input type="text" name="email" class="form-control"  value="<?php echo $mostrar["email"] ?>" >
                <label for="">Contraseña</label><br>
                <input type="password" name="password" class="form-control"  value="<?php echo $mostrar["password"] ?>" >
                <?php }?><br><br>
                <input type="submit" class="form-control" style=" background-color:#2391ef;
    color:white;"  value="Guardar">
     
       </form>
   </div>
  
</body>
</html>