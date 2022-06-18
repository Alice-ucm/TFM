
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
									Frontón-tenis
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
			
                                 <li>
                                 <a  class="active" style="align:right;color: red;" href="logout.php">Salir</a>
								</li>
							</ul>
						</nav>
					</div>
					<!-- /.Menú -->
				</nav>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //header -->
	<!-- Cuerpo -->
		<div class="news-section" id="event"> 
			<div class="container">
				<h3 class="title">Torneos
					<img src="../images/logo2.png" alt="" />
				</h3>
			 <div class="container2">
				<?php
					include("../controller/dbconnect.php");
					$query ="SELECT * FROM torneos WHERE estado=1";
					$resultado =$con->query($query);
					while($row =$resultado->fetch_assoc()){
				?>
					<div class="vistaPistas">
						<img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
						<h4><?php echo $row['titulo'];?></h4>
						<p><?php echo $row['pais'];?></p>
						<div class="news-events-agile">
							<a href="ver-torneo.php?id=<?php echo $row['id_torneo'];?>">Ver publicación</a>
						</div>
					</div>
							<?php
					         }
					     ?>
		</div>
	       <h1 style="background-color: #478297;padding:10px;color:white"> <center>Lista Torneos Inscritos</center></h1>
	         <div class="container4">			
	               <table id="tablax" class="table table-striped table-bordered" style="width:100%; ">
				        <thead>
			                <td>Nombre</td>	
							<td>Fecha</td>
							<td>Ubicacion</td>
							<td>Opciones</td>			
						</thead>
							<tbody>
								<?php
								 $query="SELECT t.id_torneo, t.titulo, i.id_inscripcion,t.fecha, t.ubicacion FROM inscripcion i 
								  INNER JOIN torneos t ON i.id_torneo=t.id_torneo   
								  WHERE id_usuario='$id'";
								  $resultado=$con->query($query);
								  while ($mostrar=$resultado->fetch_assoc()){
								?>		
								<tr>
									<td><?php echo $mostrar['titulo']?></td>
									<td><?php echo $mostrar['fecha']?></td>
									<td><?php echo $mostrar['ubicacion']?></td>
									<td><a href="../model/eliminar-tr.php?id_inscripcion=<?php echo $mostrar['id_inscripcion']?>">Eliminar</a></td>		
								</tr>
									<?php
									  }
									?>
							</tbody>
					</table>
		     </div>
		</div>
	</div>
	<!-- // -->

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
	<script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
        </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#tablax').DataTable({
                language: {
                    processing: "Cargando Datos...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ Resultados",
                    info: "",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [ [5, 25, -1], [5, 25, "All"] ],
            });
        });
    </script>

</body>

</html>