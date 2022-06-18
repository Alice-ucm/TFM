<?php include '../controller/dbconnect.php';
 include '../controller/datos.php';		
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Ver-cancha</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content=/>
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
					<!-- //Menú -->
				</nav>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //header -->

	<!-- Datos Cancha-->
	<div class="news-section" id="event"> 
			<div class="container">
					<?php 
						$id7=$_REQUEST['id'];	
						$query ="SELECT * FROM cancha WHERE id_cancha='$id7'";
						$resultado=$con->query($query);
						$row=$resultado->fetch_assoc();
					?>
					<h3 class="title"><?php echo $row['nombre'];?>
						<img src="../images/logo2.png" alt="" /></h3>
			</div>
		</div>
	<!-- Detalle Cancha -->
	   <div class="services" id="services">
	       <div class="container">
			 <div class="col-md-6 left-services-agile">
				<div class="left-services-agile1">
				    <div class="clearfix"></div>
					<img width="300px" height="200px" src="data:image/jpg/jpg;base64,<?php echo base64_encode($row['foto1']); ?>"/>
				</div>
				<div class="left-services-agile1">
					<div class="clearfix"></div>
					<img width="300px" height="200px" src="data:image/jpg/jpg;base64,<?php echo base64_encode($row['foto2']); ?>"/>
				</div>
				<div class="left-services-agile1">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<h4>Ubicacion</h4>
					<div class="clearfix"></div>
					<?php echo $row['ubicacion'];?>
				</div>
			</div>
			<div class="col-md-6 agileits_updates_grid_right">
				<h3>Detalles del Cancha</h3>
				<h2>Horario: todos los días de 9:00am - 20:00pm</h2><br>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
								    aria-controls="collapseOne">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Provincia
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body panel_text">
							<?php echo $row['provincia'];?>
							</div>
						</div>
					</div>
                    <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
								    aria-controls="collapseOne">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Ciudad
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body panel_text">
							<?php echo $row['ciudad'];?>
							</div>
						</div>
					</div>		
                    <div class="video-pop-wthree">
							<a href="#small-dialog1" class="view play-icon popup-with-zoom-anim ">
								<i  class="fa fa-pencil-square-o" aria-hidden="true"></i>Reservar</a>
										
					<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
					   <h3 class="title">Reserva<img src="../images/logo2.png" alt="" /></h3>
						<div class="contenedor">
							<div class="reserva">
					<!-- Formulario Reserva -->
						<form style="background-color:#56ad56;padding-bottom:20px !important;margin-bottom: 30px;padding-top: 20px;" action="../model/reserva.php" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id_usuario" value="<?php echo $id;?>"  >
							<input type="hidden" name="id_cancha" value="<?php echo $id7;?>"  >
							<input type="hidden" name="estado" value="1"  >
							Fecha: <input type="date" name="fecha" >
							Hora : <select  name="hora_inicio" style="width: 200px;">
										<option value="9:00-10:00">9:00 - 10:00</option>
										<option value="10:00-11:00">10:00 - 11:00</option>
										<option value="12:00-13:00">12:00 - 13:00</option>
										<option value="13:00-14:00">13:00 - 14:00</option>
										<option value="14:00-15:00">14:00 - 15:00</option>
										<option value="15:00-16:00">15:00 - 16:00</option>
										<option value="17:00-18:00">17:00 - 18:00</option>
										<option value="18:00-19:00">18:00 - 19:00</option>
									</select><input type="submit" value="Reservar">
						</form>
                    </div><br>
					
		                <table id="tablax" class="table table-striped table-bordered" style="padding-top: 20px;!important">
			                <thead>
                               <td>Fecha</td>
		                       <td>Hora inicio</td>
		                       <td>Acción</td>
	                       </thead>
							<tbody>
								<?php
									$query="SELECT * FROM reserva_cancha WHERE id_cancha='$id7' ";
									$resultado=mysqli_query($con,$query);
									while ($rows=mysqli_fetch_array($resultado)){						
								?>		
								<tr>
									<td><?php echo $rows['fecha']?></td>
									<td><?php echo $rows['hora_inicio']?></td>						
									<td>
										<?php
										if($rows['estado']==0){
												echo '<p><a class="label label-success" href="estado.php?id_reserva_cancha='
													.$rows['id_reserva_cancha'].'&estado=1">Libre
												</a></p>';
											}else{
												echo '<p><a  class="label label-warning">Reservado</a></p>';
											}
										?>     
								    </td>
								</tr>
							<?php
								}
							?>
							</tbody>
					   </table>
                     </div>
				    </div>
                 </div>
            </div>
        </div>
			<div style="padding:20px"><?php echo $row['map'];?>	</div>
			    <div class="clearfix">
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

<!-- js-scripts -->
<script src="../js/bootstrap.js"></script>
<!-- NecessaryBootstrap -->
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