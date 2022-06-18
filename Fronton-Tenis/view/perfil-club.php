
<?php
include '../controller/dbconnect.php';
session_start();
$id1 = $_SESSION['usr_id'];
$consulta = mysqli_query($con, "SELECT * FROM club WHERE id_club = '$id1';");
	$valores = mysqli_fetch_array($consulta);

	$nombre = $valores['nombre'];
	$email = $valores['email'];
	$telefono = $valores['telefono'];
	$direccion = $valores['direccion'];
	$password = md5($valores['password']);
	$foto = $valores['foto'];

	if(isset($_POST['update'])){
		$id_club =$_POST['id_club'];
		$query ="UPDATE `club` SET nombre='$_POST[nombre]', email='$_POST[email]', direccion='$_POST[direccion]',
						telefono='$_POST[telefono]',  password= md5('$_POST[password]') where id_club='$_POST[id_club]'";
		$query_run =mysqli_query($con,$query);
		if($query_run){
			echo '<script type="text/javascript"> alert("Datos Guardados Exitosamente")</script>';
		}
		else{
			echo '<script type="text/javascript"> alert("Datos no guardados, intente otra vez")</script>';
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
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="logo">
							<h1>
								<a href="../index.html">
								Frontón-Tenis
									<img class="logo-position" src="../images/logo4.png" alt="" />
								</a>
							</h1>
						</div>
					</div>

					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-9" id="link-effect-9">
						<ul class="nav navbar-nav">
								<li class="active">
								<a class="" href="club.php">Menú</a>
								</li>
								<li>
								<a class="" href="perfil-club.php">Perfil</a>
								</li>
								
								<li>
									<a href="torneos-club.php">Torneos</a>
								</li>
								<li>
									<a href="canchas-club.php" >Canchas</a>
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

	<!-- Datos Perfil-->
	<div class="about" id="about">
		<div class="container">
			<h3 class="title">Perfil
				<img src="../images/logo2.png" alt="" /><?php if (isset($_SESSION['usr_id'])) { ?>
				  <?php } else { ?>
				   <a href="login.php">Login</a>
				    <a href="register.php">Registro</a>
				   <?php } ?>
				</div></li>
			</h3>
		<form action="" method="POST" enctype="multipart/form-data" >
			<div class="about-top">
            <div class="col-md-5 col-xs-5 contact-grid-agile">
				<div class="contact-right2">
					<div class="call ">
						<input type="hidden" name="id_club" value="<?php echo $id1; ?>"><br>
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Nombre :</h3>
					</div>
					 <div class="col-xs-8 contact-grdr-w3l">	
						<input  type="text"  name="nombre" placeholder="Nombre.." value="<?php echo $nombre; ?>" >
					   </div><div class="clearfix"> </div>
					 </div>
						<div class="call">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Email  :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
							<input  type="text"  name="email" placeholder="Email.." value="<?php echo $email; ?>" >	
							</div>
							<div class="clearfix"> </div>
						</div>
                        <div class="call">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Dirección :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
							<input  type="text"  name="direccion" placeholder="Direccióm.." value="<?php echo $direccion; ?>" >
								
							</div>
							<div class="clearfix"> </div>
						</div>
                        <div class="call">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Telefono :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
							<input  type="text"  name="telefono" placeholder="Telefono.." value="<?php echo $telefono; ?>"/>
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
					   </div><div class="clearfix"> </div>
					</div>
				</div><br><div class="pull-right">
			</div>
        </form>
			<div class="col-md-6 about-wel">
			   <div class="container">
                    <img src="<?php echo $foto; ?>" width="250px"><br><br>
                  <form action="foto2.php" method="post" enctype="multipart/form-data">
		               <input type="text" name="email" value="<?php echo $email; ?>" style="display: none;">
		                  Ingresa tu nuerva foto de perfil
		                 <input type="file" name="nfoto"> <br>
		                <button type="submit" class="btn btn-primary">Actualizar</button>
                 </form>
		
	            </div>
			</div><div class="clearfix"> </div><br>
					<?php

						$query="SELECT *FROM club WHERE id_club ='$id1' ";
						$resultado=$con->query($query);
						while ($mostrar=$resultado->fetch_assoc()){
						?>
						<?php
						if($mostrar['estado']==1){
							echo '<p><a class="label label-danger" href="../model/baja-club.php?id_club='
								.$mostrar['id_club'].'&estado=0">Dar baja
							</a></p>';
						}else{
							echo '<p><a class="label label-danger" href="../model/baja-club.php?id_club='
							.$mostrar['id_club'].'&estado=0">Dar de Baja
						</a></p>';
						}

					?>
						<?php
						}
					?>
			</div>
		</div>
	</div>
	<!-- //Fin Datos -->
	
	<!-- Footer -->
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
	<script src="../js/jquery-2.2.3.min.js"></script>
	<script src="../js/bootstrap.js"></script>
	
</body>

</html>