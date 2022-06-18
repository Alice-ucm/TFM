<?php
session_start();
include_once 'controller/dbconnect.php';
if(isset($_SESSION['usr_id'])!="") {
	header("Location: view/admin-menu.php");
}
	if (isset($_POST['login'])) {

		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

		if ($row = mysqli_fetch_array($result)) {

			if($row['rol']==2){
				$_SESSION['usr_id'] = $row['id_usuario'];
				$_SESSION['usr_name'] = $row['name'];
				$_SESSION['usr_apellido'] = $row['apellido'];
			
				header("Location: view/admin-menu.php");
			}else
				//si la cuenta todavia no esta dado de alta por el usuario recibe un mensaje.
			$errormsg = "Esta cuenta esta desactivada";
		} else {
			$errormsg = "Revisa los datos!!!";
		}
	}
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Administrador</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content=""/>
	<style>
        th,td {
            padding: 0.4rem !important;
        }
        
		.dataTables_scrollBody{
			position: relative;
			overflow: auto;
			height: 200px !important;
			width: 100%;
	  
		}
		.container4{
			margin-top: 100px;
		}
    </style>
	
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Font-Awesome-Icons-css -->
	<!-- lightbox -->
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
	<!-- Popup css (for Video Popup) -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- style css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
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
					<!-- Menú -->
					<div class="navbar-header">
						<div class="logo">
							<h1>
								<a href="index.html">
								Frontón-tenis
									<img class="logo-position" src="images/logo4.png" alt="" />
								</a>
							</h1>
						</div>
					</div>

					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-9" id="link-effect-9">
                        <ul class="nav navbar-nav">
							<li class="active">
								<a class="" href="index.html">Inicio</a>
								</li>
								<li>
								<a class="" href="torneos.php">Torneos</a>
								</li>
								<li>
								<a class="" href="cancha.php">Canchas</a>
								</li>
								<li >
									<li ><a style ="background-color: green; color:beige" href="view/login.php">Deportista</a></li>
								</li>
								<li>
									<li><a style ="background-color: rgb(34, 52, 212); color:beige" href="view/login-club.php">Club</a></li>
								</li>
							</ul>
						</nav>
					</div>
					<!-- //Menú -->
				</nav>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //header -->

	<!-- Cuerpo -->
	<div class="news-section" id="event"> 
	   <div class="container">
                <h3 class="title">Login
				   <img src="images/logo2.png" alt="" /> <br> 
			   </h3>
               <center>	<div style="width:50%" class="container5">    
				<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					
				

					<div class="form-group">
						<label for="name">E-mail</label>
						<input type="text" name="email" placeholder="Ingresar Email" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Contraseña</label>
						<input type="password" name="password" placeholder="Ingresar Contraseña" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="login" value="Iniciar Sesion" class="btn btn-primary" />
						<input type="reset" value="Limpiar" class="btn btn-default" >
					</div>
				</fieldset>
			</form> 
            </center>
			</div>
			      
		</div>
    </div>
	<!-- //Cuerpo -->



</body>

</html>