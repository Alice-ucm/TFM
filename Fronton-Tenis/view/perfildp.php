
<?php
include '../controller/dbconnect.php';
session_start();
$id1 = $_SESSION['usr_id'];
$consulta = mysqli_query($con, "SELECT * FROM users WHERE id_usuario = '$id1';");
	$valores = mysqli_fetch_array($consulta);

	$name = $valores['name'];
	$email = $valores['email'];
	$apellido = $valores['apellido'];
	$direccion = $valores['direccion'];
	$password = md5($valores['password']);
	$foto = $valores['foto'];
	$edad = $valores['edad'];
	$peso = $valores['peso'];
//Actualiza los datos en la base de datos.
if(isset($_POST['update'])){
	$id_usuario =$_POST['id_usuario'];
	$query ="UPDATE `users` SET name='$_POST[name]', apellido='$_POST[apellido]', email='$_POST[email]',
	  direccion='$_POST[direccion]', peso='$_POST[peso]', edad='$_POST[edad]', password= md5('$_POST[password]')
	where id_usuario='$_POST[id_usuario]'";

	$query_run =mysqli_query($con,$query);

	if($query_run){

		echo '<script type="text/javascript"> alert("Datos Guardados Exitosamente")</script>';
	}
	else{
		echo '<script type="text/javascript"> alert("Datos no Actualizados")</script>';
	}
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Perfil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content=""/>
	
	<!-- css files -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
	
	<!-- style css -->
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all">
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<!-- //web-fonts -->

</head>

<body>
	<!-- header -->
	<div class="header">
		<div class="header-left">
			<div class="container">
				<nav class="navbar navbar-default">
					
					<div class="navbar-header">
						
						<div class="logo">
							<h1>
								<a href="index.html">
								Frontón-tenis
									<img class="logo-position" src="../images/logo4.png" alt="" />
								</a>
							</h1>
						</div>
					</div>

					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-9" id="link-effect-9">
							<ul class="nav navbar-nav">
								<li class="active">
                                <a class="" href="perfil1.php">Menú</a>
								</li>
								<li>
                                <a class="" href="perfildp.php">Perfil</a>
								</li>
								<li>
									<a href="desempeño.php">Desempeño</a>
								</li>
								<li>
								<a class="" href="torneos.php">Torneos</a>
								</li>
								<li>
								<a class="" href="canchas.php">Canchas</a>
								</li>
			
                                 <li>
                                 <a  class="active" style="align:right;color: red;" href="logout.php">Salir</a>
								</li>
							</ul>
						</nav>
					</div>
					
				</nav>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //header -->

	<!-- Cuerpo -->
	<div class="about" id="about">
		<div class="container">
			<h3 class="title">Perfil
				<img src="../images/logo2.png" alt="" /><?php if (isset($_SESSION['usr_id'])) { ?>
				<p  style="align:right" class="navbar-text"> <i class="btn btn-danger btn-xs" ><b><?php echo $_SESSION['usr_name']; ?></i></p>
				
				<?php } else { ?>
				<a href="login.php">Login</a>
				<a href="register.php">Registro</a>
				<?php } ?>
				</div>
			</h3>
		<form action="" method="POST" enctype="multipart/form-data" >
			<div class="about-top">
            <div class="col-md-5 col-xs-5 contact-grid-agile">
					
					<div class="contact-right2">
						<div class="call ">
						<input type="hidden" name="id_usuario" value="<?php echo $id1; ?>"   ><br>
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Nombre :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
								
								<input  type="text"  name="name" placeholder="Nombre.." value="<?php echo $name; ?>" >
									
								
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="call">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Apellido :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
							<input  type="text"  name="apellido" placeholder="Nombre.." value="<?php echo $apellido; ?>" >
								
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="call">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Email  :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
							<input  type="text"  name="email" placeholder="Nombre.." value="<?php echo $email; ?>" >
								
							</div>
							<div class="clearfix"> </div>
						</div>
                        <div class="call">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Dirección :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
							<input  type="text"  name="direccion" placeholder="Nombre.." value="<?php echo $direccion; ?>" >
								
							</div>
							<div class="clearfix"> </div>
						</div>
                        <div class="call">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Edad :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
							<input  type="text"  name="edad" placeholder="Nombre.." value="<?php echo $edad; ?>"/>
							</div>
							<div class="clearfix"> </div>
						</div>
                        <div class="call">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Peso :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
							<input  type="text"  name="peso" placeholder="Nombre.." value="<?php echo $peso; ?>">
							</div>
							<div class="clearfix"> </div>
						</div>
                        <div class="call">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Contraseña :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
							<input  type="password"  name="password"  value="<?php echo $password; ?>" >
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="call"><br>
                              <input type="submit" name="update" value="Guardar"/>
								</div>		
				     	</div>
							<div class="clearfix"> </div>
						</div>
					</div><br><div class="pull-right">
                </div>
            </form>
				<div class="col-md-6 about-wel">
					<div class="">
					     <img src="<?php echo $foto; ?>" width="320px"><br><br>

						<form action="foto.php" method="post" enctype="multipart/form-data">
							<input type="text" name="email" value="<?php echo $email; ?>" style="display: none; ">
							    Ingresa tu foto
							<input type="file" name="nfoto" >
							   <button type="submit" class="btn btn-primary">Actualizar</button>
						</form>
					
				</div>
			</div>
				<div class="clearfix"> </div>  <?php

						$query="SELECT *FROM users WHERE id_usuario ='$id1' ";
						$resultado=$con->query($query);
						while ($mostrar=$resultado->fetch_assoc()){
						?>
						<?php
						if($mostrar['estado']==1){
							echo '<p><a class="label label-danger" href="../model/baja-dp.php?id_usuario='
								.$mostrar['id_usuario'].'&estado=0">Dar baja
							</a></p>';
						}else{
							echo '<p><a class="label label-danger" href="../model/baja-dp.php?id_usuario='
							.$mostrar['id_usuario'].'&estado=0">Dar de Baja
						</a></p>';
						}
							?>
						<?php
						}
						?>
			</div>	
		</div>		
	</div>
	<!-- //Cuerpo -->

	<!-- footer -->
<div class="footer">
		<div class="container">
			<div class="col-xs-4 agileinfo_footer_grid">
				<h4>Nosotros</h4>
				<p>Aplicacion web para ayudarte a encontrar las mejores instalaciones deportivas para que juegues con mayor libertad y seguridad.				
				</p>
			</div>
			<div class="col-xs-4 agileinfo_footer_grid">
				<h4>Dirección</h4>
				<ul>
					<li>
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span> UCM</li>
					<li>
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<a href="mailto:info@example.com">ajoy@ucm.es</a>
					</li>
					<li>
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (0123) 0111 111 222</li>
					<li>
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span> Todos los días de 10:00 am - 8:00pm </li>
				</ul>
			</div>
			<div class="col-xs-4 agileinfo_footer_grid">
				<h4>Instagram </h4>
				<div class="agileinfo_footer_grid1">
					<a href="#">
						<img src="../images/f1.jpg" alt=" " class="img-responsive">
					</a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#">
						<img src="../images/f2.jpg" alt=" " class="img-responsive">
					</a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#">
						<img src="../images/f3.jpg" alt=" " class="img-responsive">
					</a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#">
						<img src="../images/f4.jpg" alt=" " class="img-responsive">
					</a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#">
						<img src="../images/f5.jpg" alt=" " class="img-responsive">
					</a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#">
						<img src="../images/f6.jpg" alt=" " class="img-responsive">
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			
			<div class="w3agile_footer_copy">
				<p>© 2022 Frontón-Tenis. All rights reserved | Design by
					<a href="">UCM.</a>
				</p>
			</div>
		</div>
	</div>
	<!-- //footer -->


	<!-- js-scripts -->
	<!-- jquery -->
	<script src="../js/jquery-2.2.3.min.js"></script>
	<script src="../js/bootstrap.js"></script>

</body>

</html>