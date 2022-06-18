
<?php 
include '../controller/dbconnect.php';
include '../controller/datos.php';	
	 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Deportista</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content=""/>

	<!-- css files -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
	<!-- css -->
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
								<a href="../index.html">
								Frontón-tenis
									<img class="logo-position" src="../images/logo4.png" alt="../index.html" />
								</a>
							</h1>
						</div>
					</div>
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-9" id="link-effect-9">
							<ul class="nav navbar-nav">
							<li class="active">
								<a class="" href="">Menú</a>
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

	<!-- Pagina principal para deportista -->
	<div class="about" id="about">
		<div class="container">
			<h3 class="title"><?php echo $_SESSION['usr_name']; ?>
				<img src="../images/logo2.png" alt="" /><?php if (isset($_SESSION['usr_id'])) { ?>
					<?php } else { ?>
						<a href="login.php">Login</a>
						<a href="register.php">Registro</a>
					  <?php } 
					?>
				</div>
			</h3>
		<div class="about-top">
			<div class="col-md-4 about-img-agile">
				<div style=" margin-left: 15px;"class="row">
					<h3>Menú</h3><br>
						<a href="perfildp.php"><img  class="img-responsive" src="../images/tennis1.png" alt=""></a><br>
						<a href="torneos.php"><img  class="img-responsive" src="../images/tennis2.png" alt=""></a><br>
						<a href="desempeño.php"><img class="img-responsive" src="../images/tennis3.png" alt=""></a><br>
						<a href="canchas.php"><img class="img-responsive" src="../images/tennis4.png" alt=""></a><br>
					</div>
				</div>
				<div class="col-md-6 about-wel">
					<div class="col-md-6 col-md-offset-4 well">
						<img src="../<?php echo $foto; ?>" width="250px"><br><br>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //  -->

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
						<a href="mailto:ajoy@ucm.es">ajoy@ucm.es</a>
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
				<p>© 2022 Frontón-tenis. All rights reserved | Design by
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
	<!--Bootstrap -->

</body>

</html>