<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
	$active_facturas="active";
	$active_productos="";
	$active_clientes="";
	$active_usuarios="";	
	$title="SOPORTE";
?>
<!DOCTYPE html>
<html>


  <body>
  <head>
	<?php include("head.php");?>
  </head>
  <link rel="stylesheet" href="css/soporte.css">
  <link rel="stylesheet" href="css/font.css">

	<?php
	include("navbar.php");
	?>  
	<div class="container">
		<a href="https://drive.google.com/drive/folders/18pzExF3WLXNUXd2ACWbOYJGSKrjb7lgx?usp=sharing" class="btn-descarga" download=ERS_RPM title="Descargar ERS">Documentación</a>
	</div>
  </body>
</html>