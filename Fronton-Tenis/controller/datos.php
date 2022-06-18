<?php 
session_start();
//Session y datos que necesitamos en algunos formularios.
include '../controller/dbconnect.php';

	if (isset($_SESSION['usr_id'])) {
		
	}else{
		?>
		<script type="text/javascript">
			window.location = "../index.html";
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
	$edad = $valores['edad'];
	$peso = $valores['peso'];
	$password = md5($valores['password']);
	 ?>