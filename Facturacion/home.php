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
	$title="RPM FACTURAS";
?>
<!DOCTYPE html>
<html>


  <body>
  <head>
	<?php include("head.php");?>
  </head>
  <link rel="stylesheet" href="css/home.css">
	<?php
	include("navbar.php");
	?>  
	<div>
		hola
	</div>
  </body>
</html>