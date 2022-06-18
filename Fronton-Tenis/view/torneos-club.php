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

	<!--  -->
	<div class="news-section" id="event"> 
		<div class="container">
			<h3 class="title">Agregar Torneos<img src="../images/logo2.png" alt="" /></h3>
			<div class="services" id="services">
			 <div class="container">
				<form action="../model/add-torneo.php" method="POST" enctype="multipart/form-data">
				    <div class="col-md-6 left-services-agile">
						<div class="left-services-agile1">
						   <input type="hidden" name="club_creador" value="<?php echo $id1; ?>" >
                              <div class="clearfix"></div>
							  <img src="../images/torneo1.jpg" width="600px" height="628px"><br><br>
			             </div>
                    </div>
					<div class="col-md-6 agileits_updates_grid_right" style="background-color: #28727e;">
						<h3 style="color:white">Datos </h3>
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					       <div class="col-md-6"></div><br>
                            <label for="exampleFormControlTextarea1" class="contact-p1">Título:</label>
                             <input type="text" name="titulo" class="form-control"  placeholder="" aria-label="First name">
                    
								<label for="exampleFormControlTextarea1" class="contact-p1">Fecha:</label>
								 <input type="date" name="fecha" class="form-control"  placeholder="" aria-label="First name">

								<label for="exampleFormControlTextarea1" class="contact-p1">País:</label>
								 <input type="text" class="form-control" name="pais"  placeholder="" aria-label="First name">
			
								<label for="exampleFormControlTextarea1" class="contact-p1">Provincia:</label>
								 <input type="text" class="form-control" name="provincia" aria-label="First name">
			
                                <label for="exampleFormControlTextarea1" class="contact-p1">Ubicación:</label>
                                  <input type="text" class="form-control" name="ubicacion" placeholder="" aria-label="First name">  
                    
                                <label for="exampleFormControlTextarea1" class="contact-p1">Descripción:</label>
				                  <textarea class="form-control" name="descripcion" rows="3"></textarea>
                   
                                <select  name="id_sport" style="width: 200px;">
									<?php
										$mysqli = "SELECT * FROM sport ";
										$bcategory = $con -> query ($mysqli);
										while ($valores = $bcategory->fetch_array()) {
											echo '<option value="'.$valores['id_sport'].'">'.$valores['nom_sport'].'</option>';
									    }
									?>
								</select>

								<select id="estado" name="estado" style="width: 200px;">
									<option value="1">Estado:</option>
									<option value="1">Publico</option>
									<option value="0">Privado</option>
     							 </select> <br><br> <div class="clearfix"> 

	                             <label class="contact-p1">Imagen Principal  </label>
					              <input type="file" type="file" name="imagen" />
					                 <label class="contact-p1">Imagen 2 </label>
                                     <input type="file" type="file" name="imagen2" />
					
	                        </div>
	                   <center><button type="submit" style="color:with;background: #ff2f68;height:100px, weight:100px;height: 50px;width: 200px;color: white;" class="table1" >Publicar</button>	</center>
	            </form> 
            </div>
        </div>
    </div>
        
 </div>
	       <h1 style="background-color: #478297;padding:10px;color:white"> <center>Lista Torneos</center></h1>
</div>

		<div class="container">
			<table id="tablax" class="table table-striped table-bordered" style="width:100%; ">
				<thead>
					<td>Descripcion</td>
					<td>Ubicación</td>
					<td>Pais</td>
					<td>Provincia</td>
					<td>Fecha</td>
					<td colspan="1">Acción</td>
					<td>Ver</td>
				</thead>
					<?php
						$query="SELECT * FROM torneos WHERE 
						club_creador='$id1'";
						$resultado=$con->query($query);
						while ($mostrar=$resultado->fetch_assoc()){
					?>		
																	
					<tr>			
						<td><?php echo $mostrar['titulo']?></td>
						<td><?php echo $mostrar['ubicacion']?></td>
						<td><?php echo $mostrar['pais']?></td>
						<td><?php echo $mostrar['provincia']?></td>
						<td><?php echo $mostrar['fecha']?></td>
						<td>
							<a href="../view/editar-torneoc.php?id_torneo=<?php echo $mostrar['id_torneo']; ?>"  class="label label-success" >Editar</a> 
							<a class="label label-danger" href="../model/eliminar-trc.php?id_torneo=<?php echo $mostrar['id_torneo']?>">Eliminar</a> 
						</td>
						<td><a href="ver-torneoc.php?id=<?php echo $mostrar['id_torneo']; ?>"  class="label label-success" >Ver</a>
						</td>
					</tr>
						<?php
						 }
						?>
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
                    processing: "Tratamiento en curso...",
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
<!-- jquery -->

<script src="../js/bootstrap.js"></script>

</body>

</html>