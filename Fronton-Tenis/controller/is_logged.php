<?php	
include 'dbconnect.php';
session_start();
if (isset($_SESSION['usr_id'])) {
	
}else{
	?>
	<script type="text/javascript">
		window.location = "./";
	</script>
	<?php 
}

?>