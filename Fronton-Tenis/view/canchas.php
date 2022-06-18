<?php 
include '../controller/dbconnect.php';
include '../controller/datos.php';	
	 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Canchas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content=""/>
	<!-- css files -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
	<!-- Font- -->
	<!-- Popup css-->
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
								<a class="" href="">Canchas</a>
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

	<!-- Buscador-->
		<div class="news-section" id="event"> 
				<h3 class="title">Buscador de Canchas
					<img src="../images/logo2.png" alt="" />
				</h3>
			<div class="container">
			       <h1 style="background-color: #478297;padding:10px;color:white"> <center></center></h1><br>
				<table id="tablax" class="table table-striped table-bordered" style="width:100%; ">
				      <thead>
			               <td>Nombre</td>
						   <td>Ubicación</td>
						   <td>Provincia</td>
						   <td>Ciudad</td>
                           <td colspan="1">Acción</td>
					 </thead>
						<tbody>
							<?php
								
								$query="SELECT *FROM cancha ORDER BY id_cancha DESC";
								$resultado=$con->query($query);
								while ($mostrar=$resultado->fetch_assoc()){
							?>		
																	
							<tr>
								<td><?php echo $mostrar['nombre']?></td>	
								<td><?php echo $mostrar['ubicacion']?></td>
								<td><?php echo $mostrar['provincia']?></td>
								<td><?php echo $mostrar['ciudad']?></td>
								<td><a class="label label-success"  href="ver-cancha.php?id=<?php echo $mostrar['id_cancha']; ?>"  class="btn__update" >Ver</a></td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>
			<!-- Mis Reservas-->
			<div class="contenedor">  
				<div class="video-pop-wthree">
				  <a style="color:blue; border:1px red;margin-top: 0px!important;"href="#small-dialog1" class="view play-icon popup-with-zoom-anim ">
				   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Mis Reservas</a>
				    <div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
					     <h3 class="title">Lista Reservas <img src="../images/logo2.png" alt="" /></h3>
						<table id="tablax" class="table table-striped table-bordered" style="width:100%;">
				              <thead>
                                   <td>Cancha</td>
		                           <td>Fecha</td>
		                           <td>Hora inicio</td>
		                           <td>Estado</td>
                                   <td colspan="1">Acción</td>
					         </thead>
				             <tbody>
								<?php
								 $query="SELECT c.nombre, r.fecha, r.hora_inicio, r.estado, c.id_cancha, r.id_reserva_cancha
								 FROM cancha c 
								 INNER JOIN reserva_cancha r ON c.id_cancha=r.id_cancha  
								 WHERE id_usuario='$id'";
                                $resultado=mysqli_query($con,$query);
									while ($rows=mysqli_fetch_array($resultado)){		
								?>		
								<tr>
									<td><?php echo $rows['nombre']?></td>
									<td><?php echo $rows['fecha']?></td>
									<td><?php echo $rows['hora_inicio']?></td>
									<td>
										<?php
											if($rows['estado']==0){
												echo '<p><a class="label label-success" ">Libre
												</a></p>';
											}else{
												echo '<p><a  class="label label-warning">Reservado
												</a></p>';
											}
										?> 
			                       </td>
			                        <td><a href="../model/eliminar-rv.php?id_reserva_cancha=<?php echo $rows['id_reserva_cancha']?>">Eliminar</a></td>
					             </tr>
										<?php
										 }
										?>
				             </tbody>
		                </table>
					</div>
				 </div>	<div class="clearfix"> </div>	
			    </div>
			</div><!-- //Mis Reservas-->
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
                    processing: "Buscador en curso...",
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
</body>
</html>