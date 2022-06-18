

<?php include '../controller/dbconnect.php';
	session_start();
	if (isset($_SESSION['usr_id'])) {
		
	}else{
		?>
		<script type="text/javascript">
			window.location = "./";
		</script>
		<?php 
	}
	$id = $_SESSION['usr_id'];
	$consulta = mysqli_query($con, "SELECT * FROM users WHERE id_usuario = '$id';");
	$valores = mysqli_fetch_array($consulta);
	$name = $valores['name'];
	$usuario = $valores['id_usuario'];
	$email = $valores['email'];
	$apellido = $valores['apellido'];
	$direccion = $valores['direccion'];
	$foto = $valores['foto'];	
	 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Torneos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content=""/>
	<!-- css files -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
	<!-- Font-Awesome-Icons-css -->
	<!-- Popup css -->
	<link href="../css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
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
								<a href="index.html">
								Frontón-Tenis
									<img class="logo-position" src="../images/logo4.png" alt="" />
								</a>
							</h1>
						</div>
					</div>
					<!-- Menú -->
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
                                 <a  class="active" style="align:right;color: red;" href="logout.php">Salir</a>
								</li>
							</ul>
						</nav>
					</div>
					<!-- / -->
				</nav>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //header -->
	<!-- Torneo -->
			<div class="news-section" id="event"> 
				<div class="container">
					<?php 
						
                        $id3=$_REQUEST['id'];	
					    $query ="SELECT * FROM torneos WHERE id_torneo='$id3'";
					    $resultado=$con->query($query);
				        $row=$resultado->fetch_assoc();
                    ?>
		           <h3 class="title"><?php echo $row['titulo'];?>
				      <img src="../images/logo2.png" alt="" /></h3>
	           </div>
			</div>
	<!-- Datos Torneo -->
		<div class="services" id="services">
			<div class="container">
	           <div class="col-md-6 left-services-agile">
					<div class="left-services-agile1">
				      <div class="clearfix"></div>
					   <img width="300px" height="200px" src="data:image/jpg/jpg;base64,<?php echo base64_encode($row['imagen']); ?> "/>
				    </div>
				 <div class="left-services-agile1">
			        <div class="clearfix"></div>
					<img width="300px" height="200px" src="data:image/jpg/jpg;base64,<?php echo base64_encode($row['imagen2']); ?> "/>
				</div>
				<div class="left-services-agile1">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<h4>Ubicación</h4>
					<div class="clearfix"></div><br>
					<?php echo $row['ubicacion'];?>
				</div>
			</div>
			<div class="col-md-6 agileits_updates_grid_right">
				<h3>Detalles del Torneo</h3>
				<h2>Fecha: <?php echo $row['fecha'];?></h2><br>	
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
								    aria-controls="collapseOne">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Descripción
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body panel_text">
							<?php echo $row['descripcion'];?>
							</div>
						</div>
					</div>					
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
								    aria-controls="collapseThree">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Provincia
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body panel_text">
							<?php echo $row['provincia'];?>
							</div>
						</div>
					</div>						
				</div>
					<p>Maximo 20 participantes</p>
				<?php
                   $mysqli = mysqli_connect("localhost", "root", "", "bd_sport");
				   $sql = "SELECT COUNT(*) total FROM inscripcion WHERE id_torneo='$id3'";
				   $result = mysqli_query($mysqli, $sql);
				   $fila = mysqli_fetch_assoc($result);
					  echo 'Número de total de Inscritos: ' . $fila['total'];
				?><br>
				<div class="video-pop-wthree">
				   <a style="color:blue; border:1px red"href="#small-dialog1" class="view play-icon popup-with-zoom-anim ">
					<i class="fa fa-pencil-square-o" aria-hidden="true"></i>Inscribirse</a>
									
				<!-- Popup Inscripción-->				
					<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
					    <h3 class="title">Inscripción
				             <img src="../images/logo2.png" alt="" /></h3>
						<form action="../model/inscripcion.php" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id_torneo" value="<?php echo $id3;?>"  >
							<input type="hidden" name="id_usuario" value="<?php echo $usuario; ?>" >
							 Nombre:<input type="text" name="nombre" value="<?php echo $name; ?>" disabled>
								<h3>Confirma su inscripción?</h3><br>
                                 <input type="submit" value="OK">
						</form>
				    </div>
				</div>
			</div>
			<div class="clearfix"> </div>	
		</div>
	</div>
	<!-- //Fin Datos -->

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
	<!-- Bootstrap -->
	<!-- pop-up-->
	<script src="../js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //pop-up-box-->
</body>

</html>